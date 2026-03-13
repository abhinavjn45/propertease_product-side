<?php    
    function add_new_request($email) {
        global $con;

        $stmt = $con->prepare("SELECT * FROM `free_quote_requests` WHERE `fqr_email` = ? AND `fqr_status` IN ('request_raised', 'initial_email_sent')");
        if (!$stmt) {
            return false;
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        if ($result->num_rows > 0) {
            return 'exists';
        }

        $unique_id = "PEFQR_" . time() . "_" . rand(1000, 9999);

        $stmt = $con->prepare("INSERT INTO `free_quote_requests`(`fqr_unique_id`, `fqr_email`) VALUES (?, ?)");
        if (!$stmt) {
            return false;
        }
        $stmt->bind_param("ss", $unique_id, $email);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }
?>