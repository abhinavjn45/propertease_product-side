<?php
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

    try {
        // Load DB config and helpers
        require_once __DIR__ . '/../../config/config.php';
        require_once __DIR__ . '/../utility/utility_functions.php';
        require_once __DIR__ . '/../database_functions/db-user-registration.php';

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            send_json_response(['success' => false, 'error' => 'Invalid request method']);
        }

        $societyLegalName = isset($_POST['societyLegalName']) ? trim($_POST['societyLegalName']) : '';
        $societyRegistrationNumber = isset($_POST['societyRegistrationNumber']) ? trim($_POST['societyRegistrationNumber']) : '';
        $societyRegistrationDate = isset($_POST['societyRegistrationDate']) ? trim($_POST['societyRegistrationDate']) : '';
        $societyAddress1 = isset($_POST['societyAddress1']) ? trim($_POST['societyAddress1']) : '';
        $societyAddress2 = isset($_POST['societyAddress2']) ? trim($_POST['societyAddress2']) : '';
        $societyAddress3 = isset($_POST['societyAddress3']) ? trim($_POST['societyAddress3']) : '';
        $societyState = isset($_POST['societyState']) ? trim($_POST['societyState']) : '';
        $societyCity = isset($_POST['societyCity']) ? trim($_POST['societyCity']) : '';
        $societyPincode = isset($_POST['societyPincode']) ? trim($_POST['societyPincode']) : '';
        $societyCountry = isset($_POST['societyCountry']) ? trim($_POST['societyCountry']) : '';
        $primaryContactFullname = isset($_POST['primaryContactFullname']) ? trim($_POST['primaryContactFullname']) : '';
        $contactPersonDesignation = isset($_POST['contactPersonDesignation']) ? trim($_POST['contactPersonDesignation']) : '';
        $contactPersonPhone = isset($_POST['contactPersonPhone']) ? trim($_POST['contactPersonPhone']) : '';
        $contactPersonEmail = isset($_POST['contactPersonEmail']) ? trim($_POST['contactPersonEmail']) : '';
        $totalUnits = isset($_POST['totalUnits']) ? trim($_POST['totalUnits']) : '';
        $totalBlocks = isset($_POST['totalBlocks']) ? trim($_POST['totalBlocks']) : '';
        $societyType = isset($_POST['societyType']) ? trim($_POST['societyType']) : '';
        $occupancyStatus = isset($_POST['occupancyStatus']) ? trim($_POST['occupancyStatus']) : '';
        $reraRegistrationID = isset($_POST['reraRegistrationID']) ? trim($_POST['reraRegistrationID']) : '';
        $societyPANNumber = isset($_POST['societyPANNumber']) ? trim($_POST['societyPANNumber']) : '';
        $lastAuditYear = isset($_POST['lastAuditYear']) ? trim($_POST['lastAuditYear']) : '';
        $financialYearStart = isset($_POST['financialYearStart']) ? trim($_POST['financialYearStart']) : '';
        $financialYearEnd = isset($_POST['financialYearEnd']) ? trim($_POST['financialYearEnd']) : '';

        // Basic Validation
        if (empty($societyLegalName) || empty($societyRegistrationNumber) || empty($societyRegistrationDate) || empty($societyAddress1) || empty($societyAddress2) || empty($societyAddress3) || empty($societyState) || empty($societyCity) || empty($societyPincode) || empty($societyCountry) || empty($primaryContactFullname) || empty($contactPersonDesignation) || empty($contactPersonPhone) || empty($contactPersonEmail) || empty($totalUnits) || empty($totalBlocks) || empty($societyType) || empty($occupancyStatus) || empty($reraRegistrationID) || empty($societyPANNumber) || empty($lastAuditYear) || empty($financialYearStart) || empty($financialYearEnd)) {
            send_json_response(['success' => false, 'error' => 'All fields are required']);
        }

        if (!filter_var($contactPersonEmail, FILTER_VALIDATE_EMAIL)) {
            send_json_response(['success' => false, 'error' => 'Invalid email address']);
        }

        if (strlen($contactPersonPhone) < 10) {
            send_json_response(['success' => false, 'error' => 'Please enter a valid 10-digit phone number']);
        }

        if ($societyCountry !== "India") {
            send_json_response(['success' => false, 'error' => 'Invalid attempt']);
        }

        // Formatting as requested
        $societyLegalName = ucwords(strtolower($societyLegalName));
        $contactPersonEmail = strtolower($contactPersonEmail);
        $contactPersonPhone = preg_replace('/[^0-9]/', '', $contactPersonPhone); // 10 digit numbers only
        $societyAddress1 = ucwords(strtolower($societyAddress1));
        $societyAddress2 = ucwords(strtolower($societyAddress2));
        $societyAddress3 = ucwords(strtolower($societyAddress3));
        $societyCity = ucwords(strtolower($societyCity));
        $primaryContactFullname = ucwords(strtolower($primaryContactFullname));
        $reraRegistrationID = strtoupper($reraRegistrationID);
        $societyPANNumber = strtoupper($societyPANNumber);

        if (strlen($contactPersonPhone) < 10) {
            send_json_response(['success' => false, 'error' => 'Please enter a valid 10-digit phone number']);
        }

        // BCRYPT hashing
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $result = register_new_user($formatted_name, $formatted_email, $formatted_phone, $designation, $hashed_password);
        send_json_response($result);

    } catch (Throwable $e) {
        error_log("Registration Error: " . $e->getMessage());
        send_json_response(['success' => false, 'error' => 'A critical server error occurred during registration.']);
    }
?>
