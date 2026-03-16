<?php
/**
 * AJAX Handler for verifying society DNS records
 */

require_once('../../config/config.php');
require_once('../database_functions/db-society-management.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user_unique_id'])) {
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
        exit;
    }

    $society_id = $_POST['society_id'] ?? '';
    $domain = $_POST['domain'] ?? '';

    if (empty($society_id) || empty($domain)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required data.']);
        exit;
    }

    // Clean domain (remove http/https/www if present, though JS should handle it)
    $domain = str_replace(['http://', 'https://'], '', strtolower(trim($domain)));
    $domain = rtrim($domain, '/');

    // Check for duplicate domain before saving/verifying
    if (is_domain_in_use($domain, $society_id)) {
        echo json_encode([
            'status' => 'error', 
            'message' => 'This domain is already associated with another society. Please use a different one or contact support.',
            'is_duplicate' => true
        ]);
        exit;
    }

    // Save domain to database immediately (requested: persist on "Check Connection" click)
    update_society_domain($society_id, $domain);

    // Target values
    $target_cname = "app-propertease.abhinavjain.site";
    $target_ip = "82.112.229.182";

    $parts = explode('.', $domain);
    $is_verified = false;
    $found_value = '';

    if (count($parts) > 2) {
        // Checking CNAME for subdomain (e.g. portal.society.com)
        $dns_records = @dns_get_record($domain, DNS_CNAME);
        if ($dns_records) {
            foreach ($dns_records as $record) {
                if (strtolower($record['target']) === $target_cname) {
                    $is_verified = true;
                    $found_value = $record['target'];
                    break;
                }
            }
        }
    } else {
        // Checking A record for root domain (e.g. society.com)
        $dns_records = @dns_get_record($domain, DNS_A);
        if ($dns_records) {
            foreach ($dns_records as $record) {
                if ($record['ip'] === $target_ip) {
                    $is_verified = true;
                    $found_value = $record['ip'];
                    break;
                }
            }
        }
        
        // Optionally check WWW CNAME if root failed or as an alternative? 
        // User's logic suggested BOTH for root case in the table display.
        // Let's stick to the root A-record check for "is pointing" verification.
    }

    if ($is_verified) {
        // Update database
        $result = activate_society_domain($society_id, $domain);
        if ($result['status'] === 'success') {
            echo json_encode([
                'status' => 'success', 
                'message' => 'Verification Successful! Your society portal is now active.',
                'target' => $found_value
            ]);
        } else {
            echo json_encode($result);
        }
    } else {
        echo json_encode([
            'status' => 'error', 
            'message' => 'Verification Failed. DNS records are not yet pointing to our servers.',
            'debug_hint' => 'Ensure you have added the correct CNAME or A-Record as shown in the instructions.'
        ]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
