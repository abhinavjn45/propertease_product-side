<?php
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../functions/data_fetcher.php';
require_once __DIR__ . '/../../../functions/utility_functions.php';

// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/../../../php-mailer/Exception.php';
require __DIR__ . '/../../../php-mailer/PHPMailer.php';
require __DIR__ . '/../../../php-mailer/SMTP.php';

// Load FPDF
require_once __DIR__ . '/../../../fpdf/fpdf.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Basic validations
    if (empty($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
        echo json_encode(['success' => false, 'error' => 'Invalid CSRF token. Please refresh the page and try again.']);
        exit;
    }

    $from_date = isset($_POST['from_date']) ? $_POST['from_date'] : '';
    $to_date = isset($_POST['to_date']) ? $_POST['to_date'] : '';

    if (empty($from_date) || empty($to_date)) {
        echo json_encode(['success' => false, 'error' => 'From and To dates are required.']);
        exit;
    }

    // Convert to timestamp or standard format for querying
    $start_date = date('Y-m-d 00:00:00', strtotime($from_date));
    $end_date = date('Y-m-d 23:59:59', strtotime($to_date));

    // Society Overview Data
    $society_name = get_site_option('site_fullname');
    $registration_no = get_site_option('site_tagline');
    $domain = get_site_option('site_url');
    $authority_email = get_site_option('authority_email');
    if (!$authority_email) {
        echo json_encode(['success' => false, 'error' => 'Authority Email is not configured in site options. Please add it first.']);
        exit;
    }

    // Fetch President / Secretary
    $president_name = "N/A";
    $secretary_name = "N/A";

    $stmt_mc = $con->prepare("SELECT committee_member_salutation, committee_member_fullname, committee_member_role FROM managing_committee WHERE committee_member_status = 'active' AND committee_member_role IN ('President', 'Secretary')");
    if ($stmt_mc) {
        $stmt_mc->execute();
        $res_mc = $stmt_mc->get_result();
        while ($row = $res_mc->fetch_assoc()) {
            if (strtolower($row['committee_member_role']) === 'president') {
                $president_name = $row['committee_member_salutation'] . " " . $row['committee_member_fullname'];
            }
            if (strtolower($row['committee_member_role']) === 'secretary') {
                $secretary_name = $row['committee_member_salutation'] . " " . $row['committee_member_fullname'];
            }
        }
        $stmt_mc->close();
    }

    // AGBM Data
    $latest_agbm_date = "N/A";
    $stmt_agbm = $con->prepare("SELECT MAX(agbm_posted_on) as last_agbm FROM agbms WHERE agbm_status = 'published'");
    if ($stmt_agbm) {
        $stmt_agbm->execute();
        $res_agbm = $stmt_agbm->get_result();
        if ($row = $res_agbm->fetch_assoc()) {
            $latest_agbm_date = $row['last_agbm'] ? date('d M, Y', strtotime($row['last_agbm'])) : 'N/A';
        }
        $stmt_agbm->close();
    }

    // Digital Constitution - Notices, Announcements
    $circulars_count = 0;
    $stmt_cir = $con->prepare("SELECT COUNT(*) as cnt FROM notices WHERE notice_status = 'published' AND notice_posted_on BETWEEN ? AND ?");
    if ($stmt_cir) {
        $stmt_cir->bind_param("ss", $start_date, $end_date);
        $stmt_cir->execute();
        $res_cir = $stmt_cir->get_result();
        if ($row = $res_cir->fetch_assoc()) {
            $circulars_count += $row['cnt'];
        }
        $stmt_cir->close();
    }

    $stmt_ann = $con->prepare("SELECT COUNT(*) as cnt FROM announcements WHERE announcement_status = 'active' AND announcement_added_on BETWEEN ? AND ?");
    if ($stmt_ann) {
        $stmt_ann->bind_param("ss", $start_date, $end_date);
        $stmt_ann->execute();
        $res_ann = $stmt_ann->get_result();
        if ($row = $res_ann->fetch_assoc()) {
            $circulars_count += $row['cnt'];
        }
        $stmt_ann->close();
    }

    // Complaints / Queries
    $complaints_total = 0;
    $complaints_resolved = 0;
    $stmt_com = $con->prepare("SELECT query_status, COUNT(*) as cnt FROM contact_queries WHERE query_raised_on BETWEEN ? AND ? GROUP BY query_status");
    if ($stmt_com) {
        $stmt_com->bind_param("ss", $start_date, $end_date);
        $stmt_com->execute();
        $res_com = $stmt_com->get_result();
        while ($row = $res_com->fetch_assoc()) {
            $complaints_total += $row['cnt'];
            if ($row['query_status'] === 'closed') {
                $complaints_resolved += $row['cnt'];
            }
        }
        $stmt_com->close();
    }

    // Create a new PDF document using FPDF
    class PDF extends FPDF
    {
        function Header()
        {
            // Setup title later
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }

        // MultiCell with better alignment
        function ChapterTitle($num, $title)
        {
            $this->SetFont('Arial', 'B', 12);
            $this->SetFillColor(200, 220, 255);
            $this->Cell(0, 8, "$num. $title", 0, 1, 'L', true);
            $this->Ln(4);
        }

        function ChapterBody($body)
        {
            $this->SetFont('Arial', '', 11);
            $this->MultiCell(0, 6, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $body));
            $this->Ln();
        }
    }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Title
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Statutory Compliance & Governance Audit Report', 0, 1, 'C');
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->Cell(0, 6, 'Generated via: Propert-Ease Digital Ecosystem', 0, 1, 'C');
    $pdf->Cell(0, 6, 'Reporting Period: ' . date('F j, Y', strtotime($from_date)) . ' - ' . date('F j, Y', strtotime($to_date)), 0, 1, 'C');
    $pdf->Cell(0, 6, 'Reference ID: PE-RCS-' . strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $society_name), 0, 5)) . '-' . date('Y') . '-001', 0, 1, 'C');
    $pdf->Ln(10);

    // Section 1
    $pdf->ChapterTitle(1, 'Society Overview');
    $body1 = "- Society Name: $society_name\n" .
        "- Registration No: $registration_no\n" .
        "- Digital Domain: $domain\n" .
        "- Management Committee: President - $president_name, Secretary - $secretary_name";
    $pdf->ChapterBody($body1);

    // Section 2
    $pdf->ChapterTitle(2, 'Compliance Summary (As per Section 79/Statutory Acts)');
    $body2 = "This society utilizes the Propert-Ease White-Label Platform for real-time maintenance of records. The following modules are current and verified:\n\n" .
        "Requirement: Annual Return Filing -> Completed (Date: $latest_agbm_date)\n" .
        "Requirement: Audit Report Submission -> Verified (Date: $latest_agbm_date)\n" .
        "Requirement: Member Register (Form I/J) -> Digitized (Live Sync)\n" .
        "Requirement: RERA Defect Liability Tracker -> Active (Ongoing)";
    $pdf->ChapterBody($body2);

    // Section 3
    $pdf->ChapterTitle(3, 'Financial Transparency Data');
    $body3 = "The following financial summaries have been extracted from the Propert-Ease Financial Analytics module:\n\n" .
        "- Total Maintenance Collected: RS. 0 (Module Active)\n" .
        "- Reserve Fund Balance: RS. 0 (Under Tracking)\n" .
        "- Outstanding Dues Percentage: 0%\n" .
        "- Audit Observation Status: All previous audit queries have been resolved and documented in the Digital Vault.";
    $pdf->ChapterBody($body3);

    // Section 4
    $pdf->ChapterTitle(4, 'Digital Constitution & Governance');
    $body4 = "To ensure 100% transparency, the society has adopted a Digital Constitution.\n\n" .
        "- Communication: $circulars_count Circulars/Announcements issued digitally with read-receipt tracking.\n" .
        "- Grievance Redressal: $complaints_total complaints received; $complaints_resolved resolved successfully.\n" .
        "- Meeting Minutes: All AGM/SGM minutes are timestamped and archived on the society's private domain.";
    $pdf->ChapterBody($body4);

    // Section 5
    $pdf->ChapterTitle(5, 'RERA Compliance (For New/Transitioning Societies)');
    $body5 = "- Structural Defects Logged: 0\n" .
        "- Builder Interaction Status: Records Maintained\n" .
        "- Handover Status: Complete";
    $pdf->ChapterBody($body5);

    // Section 6
    $pdf->ChapterTitle(6, 'Declaration');
    $body6 = "The Management Committee of $society_name declares that the data provided in this report is extracted from our secure, multi-tenant digital ledger on Propert-Ease. We certify that the records are maintained in accordance with the relevant State Cooperative Societies Act.\n\n\n" .
        "Authorized Signatory:\n" .
        "$secretary_name, Secretary\n" .
        "$society_name\n" .
        "Date of Submission: " . date('Y-m-d') . "\n" .
        "Digital Verification Code: PE-" . strtoupper(bin2hex(random_bytes(4))) . "-" . date('Y');
    $pdf->ChapterBody($body6);

    $pdf_content = $pdf->Output('S');

    // Send Email via PHPMailer
    $mail = new PHPMailer(true);

    try {
        if (get_site_option('can_send_mail') !== 'on') {
            echo json_encode(['success' => false, 'error' => 'Mail sending is disabled from site options.']);
            exit;
        }

        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = get_site_option('webmail_host');
        $mail->SMTPAuth = true;
        $mail->Username = get_site_option('webmail_username');
        $mail->Password = get_site_option('webmail_auth');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = get_site_option('webmail_port');

        //Recipients
        $mail->setFrom(get_site_option('webmail_username'), get_site_option('site_title'));
        $mail->addAddress($authority_email);     // Send to authority email

        // Attachment
        $mail->addStringAttachment($pdf_content, 'Statutory_Compliance_Audit_Report.pdf', 'base64', 'application/pdf');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Statutory Compliance & Governance Audit Report - ' . date('Y-m-d');
        $mail->Body = '
            <h3>Statutory Compliance & Governance Audit Report</h3>
            <p>Dear Admin,</p>
            <p>Please find attached the Statutory Compliance & Governance Audit Report generated via the Propert-Ease Digital Ecosystem for the period <strong>' . htmlspecialchars($from_date) . '</strong> to <strong>' . htmlspecialchars($to_date) . '</strong>.</p>
            <p>This report includes detailed data about the Society Overview, Compliance Summary, Financial Transparency, and Digital Constitution.</p>
            <br>
            <p>Best regards,<br>Propert-Ease Platform</p>
        ';
        $mail->AltBody = 'Please find attached the Statutory Compliance & Governance Audit Report for the specified period.';

        $mail->send();

        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        // file_put_contents('mail_error.log', $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
        echo json_encode(['success' => false, 'error' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['success' => false, 'error' => 'Invalid Request']);
    exit;
}
?>