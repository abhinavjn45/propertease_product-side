<?php
require_once('../assets/includes/config/config.php');

$queries = [
    "ALTER TABLE societies ADD COLUMN society_logo VARCHAR(255) DEFAULT NULL AFTER society_domain",
    "ALTER TABLE societies MODIFY COLUMN society_financial_cycle_start VARCHAR(20) NOT NULL",
    "ALTER TABLE societies MODIFY COLUMN society_financial_cycle_end VARCHAR(20) NOT NULL"
];

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

foreach ($queries as $sql) {
    if ($con->query($sql)) {
        echo "Successfully executed: $sql<br>";
    } else {
        echo "Error executing query ($sql): " . $con->error . "<br>";
    }
}

$con->close();
?>
