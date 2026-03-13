<!DOCTYPE html>
<html lang='en' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='format-detection' content='telephone=no, date=no, address=no, email=no'>
    <title>Verify Your Email - {site_title}</title>
    <style>
        @media (prefers-color-scheme: dark) {
            .body { background-color: #0c0d18 !important; }
            .card-wrapper { background-color: #161a2d !important; border-color: #2a2f45 !important; }
            .title { color: #ffffff !important; }
            .text { color: #94a3b8 !important; }
            .otp-box { background: #2D31FA !important; color: #ffffff !important; }
            .footer-text { color: #64748b !important; }
            .divider { background-color: #2a2f45 !important; }
        }
        @media only screen and (max-width: 600px) {
            .card-wrapper { border-radius: 0 !important; border: none !important; }
            .content-td { padding: 30px 20px !important; }
        }
    </style>
</head>
<body class='body' style='margin: 0; padding: 0; width: 100%; -webkit-text-size-adjust: 100%; background-color: #f1f5f9;'>
    <div role='article' aria-roledescription='email' aria-label='Verify Your Email' lang='en'>
        <table style='width: 100%; border-collapse: collapse;' cellpadding='0' cellspacing='0' role='presentation'>
            <tr>
                <td align='center' style='padding: 50px 0;'>
                    <!-- Logo Area -->
                    <table style='width: 100%; max-width: 600px;' cellpadding='0' cellspacing='0' role='presentation'>
                        <tr>
                            <td align='center' style='padding-bottom: 30px;'>
                                <img src='{site_url}assets/img/logo/{site_logo}' alt='{site_title} Logo' width='160' style='border: 0; max-width: 100%; line-height: 100%; vertical-align: middle;'>
                            </td>
                        </tr>
                    </table>

                    <!-- Main Content Card -->
                    <table class='card-wrapper' style='width: 100%; max-width: 600px; background-color: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);' cellpadding='0' cellspacing='0' role='presentation'>
                        <tr>
                            <td class='content-td' style='padding: 50px 40px;'>
                                <h1 class='title' style='margin: 0 0 16px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 26px; font-weight: 800; color: #0f172a; text-align: center;'>Verify Your Account</h1>
                                
                                <p class='text' style='margin: 0 0 32px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #475569; text-align: center;'>
                                    Hi <strong>{user_fullname}</strong>,<br><br>
                                    Welcome to {site_title}! Please use the verification code below to complete your registration.
                                </p>

                                <!-- OTP Box -->
                                <table style='width: 100%;' cellpadding='0' cellspacing='0' role='presentation'>
                                    <tr>
                                        <td align='center' style='padding-bottom: 32px;'>
                                            <div class='otp-box' style='display: inline-block; padding: 18px 48px; background-color: #2D31FA; border-radius: 12px; font-family: "Courier New", Courier, monospace; letter-spacing: 10px; font-size: 36px; font-weight: 900; color: #ffffff; box-shadow: 0 10px 15px -3px rgba(45, 49, 250, 0.3);'>
                                                {otp_code}
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <p class='text' style='margin: 0 0 32px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #64748b; text-align: center;'>
                                    This code is valid for <strong>10 minutes</strong>. If you did not request this, please ignore this email.
                                </p>

                                <div class='divider' style='height: 1px; background-color: #f1f5f9; margin: 0 0 32px;'></div>

                                <p class='text' style='margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.5; color: #94a3b8; text-align: center;'>
                                    Sent with &hearts; from {site_title}<br>
                                    Need help? Contact <a href='mailto:{admin_email}' style='color: #2D31FA; text-decoration: none;'>{admin_email}</a>
                                </p>
                            </td>
                        </tr>
                    </table>

                    <!-- Footer -->
                    <table style='width: 100%; max-width: 600px;' cellpadding='0' cellspacing='0' role='presentation'>
                        <tr>
                            <td style='padding-top: 32px; text-align: center;'>
                                <p class='footer-text' style='margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 11px; color: #94a3b8; line-height: 1.6; letter-spacing: 0.5px;'>
                                    &copy; {current_year} {site_title}. {site_tagline}<br>
                                    All rights reserved.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>