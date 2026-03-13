<?php
require_once('../assets/includes/config/config.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$res = $conn->query("SELECT user_otp FROM db_users WHERE user_email = 'verifytest@example.com' ORDER BY user_id DESC LIMIT 1");
if ($row = $res->fetch_assoc()) {
    echo $row['user_otp'];
} else {
    echo "Not found";
}
?>
