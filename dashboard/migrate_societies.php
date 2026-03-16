<?php
require_once('../assets/includes/config/config.php');
$sql = file_get_contents('../assets/sql/societies.sql');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->multi_query($sql)) {
    echo "Table 'societies' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
