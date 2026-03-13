<?php
// ajax-send-otp.php - Root fix for JSON corruption and hang
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't leak errors to output
session_start();
ob_start();
header('Content-Type: application/json');

function send_json_response($data) {
    if (ob_get_length()) ob_clean();
    echo json_encode($data);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

try {
    // Load dependencies correctly
    $base_dir = __DIR__ . '/../../';
    require_once $base_dir . 'config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-user-registration.php';
    require_once __DIR__ . '/../database_functions/db-email-templates.php';

    // PHPMailer Core Files
    require_once $base_dir . 'php-mailer/Exception.php';
    require_once $base_dir . 'php-mailer/PHPMailer.php';
    require_once $base_dir . 'php-mailer/SMTP.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    if (get_site_option('can_send_mail') !== 'on') {
        send_json_response(['success' => false, 'error' => 'Mailing system is currently disabled by administrator.']);
    }

    $email = isset($_POST['email']) ? strtolower(trim($_POST['email'])) : '';
    if (empty($email)) {
        send_json_response(['success' => false, 'error' => 'Email is required']);
    }

    $user = get_user_by_email($email);
    if (!$user) {
        send_json_response(['success' => false, 'error' => 'No account found with this email.']);
    }

    $otp_raw = generate_otp(6);
    $expiry = date('Y-m-d H:i:s', strtotime('+10 minutes'));

    if (!set_user_otp($email, $otp_raw, $expiry)) {
        send_json_response(['success' => false, 'error' => 'Could not save security code.']);
    }

    $template = get_email_template_by_purpose('email_otp_verification');
    if (!$template) {
        send_json_response(['success' => false, 'error' => 'Verification email template is missing in database.']);
    }

    $data = [
        'user_fullname' => $user['user_fullname'],
        'otp_code'      => $otp_raw,
        'email'         => $email
    ];

    $body = populate_template($template['et_fullcode'], $data);
    $subject = populate_template($template['et_subject'], $data);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = trim(get_site_option('webmail_host'));
    $mail->SMTPAuth   = true;
    $mail->Username   = trim(get_site_option('webmail_username'));
    $mail->Password   = trim(get_site_option('webmail_auth'));
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;

    // Root Fix for XAMPP/Local SSL issues: Disable certificate verification
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    $mail->setFrom($mail->Username, get_site_option('site_title'));
    $mail->addAddress($email, $user['user_fullname']);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    if($mail->send()) {
        send_json_response(['success' => true, 'message' => 'Verification code sent.']);
    } else {
        send_json_response(['success' => false, 'error' => 'Email engine failed to send.']);
    }

} catch (PHPMailerException $e) {
    send_json_response(['success' => false, 'error' => "Mailer Error: " . $mail->ErrorInfo]);
} catch (Throwable $e) {
    // Log the actual error for the developer
    error_log("OTP Error: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
    send_json_response(['success' => false, 'error' => "Critical server error. Check PHP error logs."]);
}
?>
