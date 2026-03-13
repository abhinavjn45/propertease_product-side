<?php
/**
 * Verifies user login credentials.
 * Checks if user exists, is active, and password matches.
 * 
 * @param string $email
 * @param string $password
 * @return array ['success' => bool, 'error' => string|null, 'user' => array|null]
 */
function verify_login_credentials($email, $password) {
    global $con;

    $stmt = $con->prepare("SELECT user_unique_id, user_fullname, user_password, user_status FROM users WHERE user_email = ? LIMIT 1");
    if (!$stmt) {
        return ['success' => false, 'error' => 'Database error during credential check'];
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows === 0) {
        return ['success' => false, 'error' => 'No account found with this email address'];
    }

    $user = $res->fetch_assoc();

    // Check password
    if (!password_verify($password, $user['user_password'])) {
        return ['success' => false, 'error' => 'Incorrect password. Please try again.'];
    }

    // Check account status
    if ($user['user_status'] !== 'active') {
        return ['success' => false, 'error' => 'Your account is not active. Please complete verification or contact support.'];
    }

    return [
        'success' => true,
        'user' => [
            'unique_id' => $user['user_unique_id'],
            'fullname' => $user['user_fullname']
        ]
    ];
}
