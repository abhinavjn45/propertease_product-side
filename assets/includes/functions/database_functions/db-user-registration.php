<?php
function register_new_user($name, $email, $phone, $designation, $password)
{
    global $con;

    // Check if email or phone already exists
    $stmt = $con->prepare("SELECT user_id FROM users WHERE user_email = ? OR user_phone_number = ? LIMIT 1");
    if (!$stmt)
        return ['success' => false, 'error' => 'Database error during check'];

    $stmt->bind_param("ss", $email, $phone);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows > 0) {
        return ['success' => false, 'error' => 'An account with this email/phone already exists'];
    }

    $unique_id = "PEUSR_" . time() . "_" . rand(1000, 9999);
    $status = 'pending_verification';
    $role = 'committee_member';

    $stmt = $con->prepare("INSERT INTO users (user_unique_id, user_fullname, user_email, user_phone_number, user_designation, user_role, user_password, user_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt)
        return ['success' => false, 'error' => 'Database error during insertion'];

    $stmt->bind_param("ssssssss", $unique_id, $name, $email, $phone, $designation, $role, $password, $status);
    $ok = $stmt->execute();
    $stmt->close();

    if ($ok) {
        return ['success' => true, 'unique_id' => $unique_id];
    } else {
        return ['success' => false, 'error' => 'Failed to create account'];
    }
}

function set_user_otp($email, $otp_raw, $expiry) {
    global $con;
    $otp_hashed = password_hash($otp_raw, PASSWORD_BCRYPT);
    $stmt = $con->prepare("UPDATE users SET user_otp_code = ?, user_otp_expiry = ? WHERE user_email = ?");
    if (!$stmt) return false;
    
    $stmt->bind_param("sss", $otp_hashed, $expiry, $email);
    $ok = $stmt->execute();
    $stmt->close();
    return $ok;
}

function verify_user_otp($email, $otp_raw) {
    global $con;
    $stmt = $con->prepare("SELECT user_otp_code, user_otp_expiry FROM users WHERE user_email = ? LIMIT 1");
    if (!$stmt) return ['success' => false, 'error' => 'Database error'];
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows === 0) return ['success' => false, 'error' => 'User not found'];

    $row = $res->fetch_assoc();
    $stored_hash = $row['user_otp_code'];
    $expiry = $row['user_otp_expiry'];

    // Check expiry (10 minutes)
    if (strtotime($expiry) < time()) {
        return ['success' => false, 'error' => 'Verification code has expired'];
    }

    // Verify Hash
    if (password_verify($otp_raw, $stored_hash)) {
        return ['success' => true];
    } else {
        return ['success' => false, 'error' => 'Invalid verification code'];
    }
}

function activate_user($email) {
    global $con;
    $stmt = $con->prepare("UPDATE users SET user_status = 'active', user_otp_code = NULL, user_otp_expiry = NULL WHERE user_email = ?");
    if (!$stmt) return false;
    
    $stmt->bind_param("s", $email);
    $ok = $stmt->execute();
    $stmt->close();
    return $ok;
}

function get_user_by_email($email) {
    global $con;
    $stmt = $con->prepare("SELECT user_fullname, user_status FROM users WHERE user_email = ? LIMIT 1");
    if (!$stmt) return null;
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    return $res->fetch_assoc();
}
function get_user_by_unique_id($unique_id) {
    global $con;
    $stmt = $con->prepare("SELECT user_fullname, user_email, user_phone_number, user_designation, user_role, user_status FROM users WHERE user_unique_id = ? LIMIT 1");
    if (!$stmt) return null;
    
    $stmt->bind_param("s", $unique_id);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    return $res->fetch_assoc();
}
?>