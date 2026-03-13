<?php
// ajax-login-user.php - Handles email/password check and sends OTP
error_reporting(E_ALL);
ini_set('display_errors', 0);
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
    $base_dir = __DIR__ . '/../../';
    require_once $base_dir . 'config/config.php';
    require_once __DIR__ . '/../utility/utility_functions.php';
    require_once __DIR__ . '/../database_functions/db-user-login.php';
    require_once __DIR__ . '/../database_functions/db-user-registration.php';
    require_once __DIR__ . '/../database_functions/db-email-templates.php';

    // PHPMailer Core Files
    require_once $base_dir . 'php-mailer/Exception.php';
    require_once $base_dir . 'php-mailer/PHPMailer.php';
    require_once $base_dir . 'php-mailer/SMTP.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        send_json_response(['success' => false, 'error' => 'Invalid request method']);
    }

    $email = isset($_POST['email']) ? strtolower(trim($_POST['email'])) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($email) || empty($password)) {
        send_json_response(['success' => false, 'error' => 'Email and Password are required']);
    }

    // Step 1: Verify Credentials
    $login_res = verify_login_credentials($email, $password);
    if (!$login_res['success']) {
        send_json_response(['success' => false, 'error' => $login_res['error']]);
    }

    // Step 2: Handle OTP Sending Logic (Reusing ajax-send-otp pattern)
    if (get_site_option('can_send_mail') !== 'on') {
        send_json_response(['success' => false, 'error' => 'Login system is currently restricted. Please try again later.']);
    }

    $otp_raw = generate_otp(6);
    $expiry = date('Y-m-d H:i:s', strtotime('+10 minutes'));

    if (!set_user_otp($email, $otp_raw, $expiry)) {
        send_json_response(['success' => false, 'error' => 'Security system failure. Please try later.']);
    }

    $template = get_email_template_by_purpose('email_otp_verification');
    if (!$template) {
        send_json_response(['success' => false, 'error' => 'Identity verification template missing.']);
    }

    $user_data = [
        'user_fullname' => $login_res['user']['fullname'],
        'otp_code'      => $otp_raw,
        'email'         => $email
    ];

    $body = populate_template($template['et_fullcode'], $user_data);
    $subject = populate_template($template['et_subject'], $user_data);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = trim(get_site_option('webmail_host'));
    $mail->SMTPAuth   = true;
    $mail->Username   = trim(get_site_option('webmail_username'));
    $mail->Password   = trim(get_site_option('webmail_auth'));
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;

    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    $mail->setFrom($mail->Username, get_site_option('site_title'));
    $mail->addAddress($email, $login_res['user']['fullname']);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    if($mail->send()) {
        send_json_response([
            'success' => true, 
            'message' => 'Credentials verified. Security code sent to your email.',
            'email' => $email
        ]);
    } else {
        send_json_response(['success' => false, 'error' => 'Mailing failure. Please try again.']);
    }

} catch (PHPMailerException $e) {
    send_json_response(['success' => false, 'error' => "Identity verification failed to start. Please retry."]);
} catch (Throwable $e) {
    error_log("Login AJAX Error: " . $e->getMessage());
    send_json_response(['success' => false, 'error' => "Server synchronization error. Please try again."]);
}
