<?php
/**
 * Email Template Functions
 */

function get_email_template_by_purpose($purpose) {
    global $con;
    $stmt = $con->prepare("SELECT et_subject, et_fullcode FROM email_templates WHERE et_purpose = ? AND et_status = 'active' LIMIT 1");
    if (!$stmt) return null;
    
    $stmt->bind_param("s", $purpose);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows > 0) {
        return $res->fetch_assoc();
    }
    return null;
}

/**
 * Replaces placeholders in a string.
 * Supports both {key} and any other dynamic variables passed in $data.
 */
function populate_template($content, $data = []) {
    // 1. First replace site-wide placeholders using the built-in logic in get_site_option if possible,
    // or manually here since we want full control over variables like {otp_code}.
    
    // We'll prepare a comprehensive replacement array.
    $replacements = [
        '{site_title}'   => get_site_option('site_title'),
        '{site_url}'     => get_site_option('site_url'),
        '{admin_email}'  => get_site_option('admin_email'),
        '{current_year}' => date('Y'),
        '{site_logo}'    => get_site_option('logo') ?: 'logo.png',
    ];

    // Add custom data (like otp_code, user_fullname)
    foreach ($data as $key => $val) {
        $replacements['{' . $key . '}'] = $val;
    }

    // Explicitly handle keys that don't have braces in the $data array
    $final_replacements = [];
    foreach ($replacements as $key => $val) {
        $final_key = (strpos($key, '{') === 0) ? $key : '{' . $key . '}';
        $final_replacements[$final_key] = $val;
    }

    return str_replace(array_keys($final_replacements), array_values($final_replacements), $content);
}
?>
