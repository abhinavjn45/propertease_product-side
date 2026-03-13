<?php    
    function add_new_contact_query($name, $email, $message) {
        global $con;

        $stmt = $con->prepare("SELECT * FROM `contact_queries` WHERE `cq_email` = ? AND `cq_status` IN ('message_received', 'initial_email_sent')");
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

        $unique_id = "PECQ_" . time() . "_" . rand(1000, 9999);

        $stmt = $con->prepare("INSERT INTO `contact_queries`(`cq_unique_id`, `cq_name`, `cq_email`, `cq_message`) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            return false;
        }
        $stmt->bind_param("ssss", $unique_id, $name, $email, $message);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }
?>