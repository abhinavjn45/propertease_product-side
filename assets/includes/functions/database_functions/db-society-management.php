<?php
/**
 * db-society-management.php - Functions for society database operations
 */

/**
 * Registers a new society in the database
 * 
 * @param array $data Form data from the registration request
 * @param array $files File data from the registration request
 * @return array Status and message
 */
function register_society($data, $files = []) {
    global $con;

    // Generate unique ID
    $unique_id = 'SOC-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));

    // Session-based data
    $added_by = $con->real_escape_string($data['added_by'] ?? '');

    // Basic Data
    $legal_name = $con->real_escape_string($data['societyLegalName']);
    $reg_number = $con->real_escape_string($data['societyRegistrationNumber']);
    $reg_date = $con->real_escape_string($data['societyRegistrationDate']);
    $address1 = $con->real_escape_string($data['societyAddress1']);
    $address2 = $con->real_escape_string($data['societyAddress2'] ?? '');
    $landmark = $con->real_escape_string($data['societyAddress3'] ?? '');
    $country = 'India';
    $state = $con->real_escape_string($data['societyState']);
    $city = $con->real_escape_string($data['societyCity']);
    $pincode = $con->real_escape_string($data['societyPincode']);

    // Governance
    $contact_fullname = $con->real_escape_string($data['primaryContactFullname']);
    $contact_designation = $con->real_escape_string($data['contactPersonDesignation']);
    $contact_phone = $con->real_escape_string($data['contactPersonPhone']);
    $contact_email = $con->real_escape_string($data['contactPersonEmail']);

    // Property
    $unit_count = $con->real_escape_string($data['totalUnits']);
    $block_count = $con->real_escape_string($data['totalBlocks']);
    
    // Map Society Type to Enum
    $raw_type = strtolower($data['societyType'] ?? '');
    $society_type = 'residential'; // Default
    if (strpos($raw_type, 'commercial') !== false) {
        $society_type = (strpos($raw_type, 'co-operative') !== false || strpos($raw_type, 'housing') !== false) ? 'both' : 'commercial';
    } 
    // Simplified mapping based on user enum: 'residential', 'commercial', 'both'
    // For now, let's just make it simple or use the value directly if it matches
    if (in_array($raw_type, ['residential', 'commercial', 'both'])) {
        $society_type = $raw_type;
    } else {
        $society_type = 'residential'; // fallback
    }

    // Map Occupancy Status to Enum
    $raw_occupancy = strtolower($data['occupancyStatus'] ?? '');
    // Enum: 'ready_to_move', 'under_construction', 'transitioning_from_builder', 'occupied'
    $occupancy_status = 'ready_to_move';
    if (strpos($raw_occupancy, 'under construction') !== false) $occupancy_status = 'under_construction';
    elseif (strpos($raw_occupancy, 'transitioning') !== false) $occupancy_status = 'transitioning_from_builder';
    elseif (strpos($raw_occupancy, 'occupied') !== false) $occupancy_status = 'ready_to_move'; // Assuming ready to move covers occupied

    // Compliance
    $rera_id = $con->real_escape_string($data['reraRegistrationID'] ?? '');
    $pan = $con->real_escape_string($data['societyPANNumber']);
    $last_audit = $con->real_escape_string($data['lastAuditYear']);
    $cycle_start = $con->real_escape_string($data['financialYearStart']);
    $cycle_end = $con->real_escape_string($data['financialYearEnd']);

    // Technical
    $domain = $con->real_escape_string($data['societyDomain'] ?? '');
    
    // Handle Logo Upload
    $logo_path = '';
    if (isset($files['societyLogo']) && $files['societyLogo']['error'] === UPLOAD_ERR_OK) {
        // Upload path relative to ajax-add-society.php
        $upload_dir = '../../../../../user-side/dashboard/assets/images/societies/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $file_ext = pathinfo($files['societyLogo']['name'], PATHINFO_EXTENSION);
        $new_filename = $unique_id . '_logo.' . $file_ext;
        $target_file = $upload_dir . $new_filename;
        
        if (move_uploaded_file($files['societyLogo']['tmp_name'], $target_file)) {
            // DB path relative to product-side root (for dashboard display)
            $logo_path = '../user-side/dashboard/assets/images/societies/' . $new_filename;
        }
    }

    // Check for duplicate registration number or RERA ID
    $check_query = "SELECT society_id FROM societies WHERE society_reg_number = '$reg_number' OR (society_rera_registration_id = '$rera_id' AND society_rera_registration_id != '')";
    $result = $con->query($check_query);
    if ($result && $result->num_rows > 0) {
        return ['status' => 'error', 'message' => 'A society with same Registration Number is already registered.'];
    }

    // Insert Query (Matching User provided columns)
    $query = "INSERT INTO societies (
        society_unique_id, 
        society_legal_name, 
        society_reg_number, 
        society_reg_date,
        society_address1, 
        society_address2, 
        society_landmark,
        society_country,
        society_state, 
        society_city, 
        society_pincode,
        society_primary_contact_fullname, 
        society_primary_contact_designation, 
        society_authorised_phone_number, 
        society_authorised_email_address,
        society_number_of_units, 
        society_number_of_blocks_wings, 
        society_type, 
        society_occupancy_status,
        society_rera_registration_id, 
        society_pan, 
        society_last_audit_year, 
        society_financial_cycle_start, 
        society_financial_cycle_end,
        society_domain,
        society_logo,
        society_status,
        society_added_by
    ) VALUES (
        '$unique_id', 
        '$legal_name', 
        '$reg_number', 
        '$reg_date',
        '$address1', 
        '$address2', 
        '$landmark',
        '$country',
        '$state', 
        '$city', 
        '$pincode',
        '$contact_fullname', 
        '$contact_designation', 
        '$contact_phone', 
        '$contact_email',
        '$unit_count', 
        '$block_count', 
        '$society_type', 
        '$occupancy_status',
        '$rera_id', 
        '$pan', 
        '$last_audit', 
        '$cycle_start', 
        '$cycle_end',
        '$domain',
        '$logo_path',
        'pending_verification',
        '$added_by'
    )";

    if ($con->query($query)) {
        return ['status' => 'success', 'message' => 'Society registered successfully!', 'society_id' => $unique_id];
    } else {
        return ['status' => 'error', 'message' => 'Database error: ' . $con->error];
    }
}

/**
 * Fetches all societies created by a specific user
 * 
 * @param string $user_id Unique ID of the user who added the societies
 * @return array List of societies
 */
function get_societies_by_user_id($user_id) {
    global $con;
    $user_id = $con->real_escape_string($user_id);
    
    $query = "SELECT s.*, o.logo as site_logo 
              FROM societies s 
              LEFT JOIN society_site_options o ON s.society_unique_id = o.society_unique_id 
              WHERE s.society_added_by = '$user_id' 
              ORDER BY s.society_id DESC";
    $result = $con->query($query);
    
    $societies = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $societies[] = $row;
        }
    }
    
    return $societies;
}

/**
 * Fetches a single society by its unique ID
 * 
 * @param string $unique_id Unique ID of the society
 * @return array|null Society data or null if not found
 */
function get_society_by_unique_id($unique_id) {
    global $con;
    $unique_id = $con->real_escape_string($unique_id);
    
    $query = "SELECT * FROM societies WHERE society_unique_id = '$unique_id' LIMIT 1";
    $result = $con->query($query);
    
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    
    return null;
}
/**
 * Activates a society and updates its verified domain
 * 
 * @param string $society_id Unique ID of the society
 * @param string $domain The verified domain
 * @return array Status and message
 */
function activate_society_domain($society_id, $domain) {
    global $con;
    $society_id = $con->real_escape_string($society_id);
    $domain = $con->real_escape_string($domain);
    
    $query = "UPDATE societies SET society_status = 'pending_setup', society_domain = '$domain' WHERE society_unique_id = '$society_id'";
    
    if ($con->query($query)) {
        return ['status' => 'success', 'message' => 'Society domain verified! Status updated to pending setup.'];
    } else {
        return ['status' => 'error', 'message' => 'Database error: ' . $con->error];
    }
}

/**
 * Updates the domain for a society
 * 
 * @param string $society_id Unique ID of the society
 * @param string $domain The domain to save
 * @return bool Success or failure
 */
function update_society_domain($society_id, $domain) {
    global $con;
    $society_id = $con->real_escape_string($society_id);
    $domain = $con->real_escape_string($domain);
    
    $query = "UPDATE societies SET society_domain = '$domain' WHERE society_unique_id = '$society_id'";
    return $con->query($query);
}

/**
 * Checks if a domain is already associated with another society
 * 
 * @param string $domain The domain to check
 * @param string $exclude_id The society ID to exclude from the check
 * @return bool True if domain is in use, false otherwise
 */
function is_domain_in_use($domain, $exclude_id) {
    global $con;
    $domain = $con->real_escape_string($domain);
    $exclude_id = $con->real_escape_string($exclude_id);
    
    $query = "SELECT society_id FROM societies WHERE society_domain = '$domain' AND society_unique_id != '$exclude_id' LIMIT 1";
    $result = $con->query($query);
    
    return ($result && $result->num_rows > 0);
}

/**
 * Syncs the logged-in user to the office_members table as an admin for a specific society.
 * 
 * @param string $society_id Unique ID of the society
 * @param string $user_id Unique ID of the logged-in user
 * @return array Status and message
 */
function sync_society_admin_to_office_members($society_id, $user_id) {
    global $con;
    $society_id = $con->real_escape_string($society_id);
    $user_id = $con->real_escape_string($user_id);

    // 1. Fetch user details from users table
    $query = "SELECT * FROM users WHERE user_unique_id = '$user_id' LIMIT 1";
    $result = $con->query($query);
    if (!$result || $result->num_rows === 0) {
        return ['status' => 'error', 'message' => 'User not found for synchronization.'];
    }
    $user = $result->fetch_assoc();

    // 2. Check if already exists in office_members for this society (to avoid duplicates)
    $email = $con->real_escape_string($user['user_email']);
    $check_query = "SELECT office_member_id FROM office_members WHERE society_unique_id = '$society_id' AND office_member_email = '$email' LIMIT 1";
    $check_res = $con->query($check_query);
    if ($check_res && $check_res->num_rows > 0) {
        return ['status' => 'success', 'message' => 'User already exists as office member.'];
    }

    // 3. Prepare data for insertion
    $member_unique_id = "OMBR_" . time() . "_" . rand(1000, 9999);
    $fullname = $con->real_escape_string($user['user_fullname']);
    $password = $con->real_escape_string($user['user_password']);
    $phone = $con->real_escape_string($user['user_phone_number']);
    $role = 'admin'; // Always admin for the creator
    $status = 'active';

    // 4. Insert into office_members
    $insert_query = "INSERT INTO office_members (
        society_unique_id, 
        office_member_unique_id, 
        office_member_fullname, 
        office_member_email, 
        office_member_password, 
        office_member_phone_number, 
        office_member_role, 
        office_member_status,
        office_member_added_by
    ) VALUES (
        '$society_id', 
        '$member_unique_id', 
        '$fullname', 
        '$email', 
        '$password', 
        '$phone', 
        '$role', 
        '$status',
        '$user_id'
    )";

    if ($con->query($insert_query)) {
        return ['status' => 'success', 'message' => 'Office member synchronized successfully.'];
    } else {
        return ['status' => 'error', 'message' => 'Sync database error: ' . $con->error];
    }
}

/**
 * Initializes the society_site_options table with default values for a new society.
 * 
 * @param string $society_id Unique ID of the society
 * @param string $domain The verified domain of the society
 * @param string $legal_name The legal name of the society
 * @param string $society_logo The registration logo path
 * @return array Status and message
 */
function initialize_society_site_options($society_id, $domain, $legal_name, $society_logo = '') {
    global $con;
    $society_id = $con->real_escape_string($society_id);
    $domain = $con->real_escape_string($domain);
    $legal_name = $con->real_escape_string($legal_name);
    $logo = $con->real_escape_string($society_logo);

    // 1. Check if options already exist (to avoid duplicates)
    $check_query = "SELECT society_site_option_id FROM society_site_options WHERE society_unique_id = '$society_id' LIMIT 1";
    $check_res = $con->query($check_query);
    if ($check_res && $check_res->num_rows > 0) {
        return ['status' => 'success', 'message' => 'Site options already initialized.'];
    }

    // 2. Fetch global defaults from site_options table
    // Required: footer_text, footer_right_text, webmail_host, webmail_username, webmail_auth, webmail_port
    $options_to_fetch = [
        'footer_text', 'footer_right_text', 
        'webmail_host', 'webmail_username', 'webmail_auth', 'webmail_port'
    ];
    
    $defaults = [];
    foreach ($options_to_fetch as $opt) {
        $res = $con->query("SELECT option_value FROM site_options WHERE option_key = '$opt' LIMIT 1");
        if ($res && $res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $defaults[$opt] = $con->real_escape_string($row['option_value']);
        } else {
            $defaults[$opt] = ''; 
        }
    }

    // 3. Prepare site-specific values
    $site_url = "https://" . $domain . "/";
    $dashboard_url = $site_url . "dashboard/";
    $timezone = 'Asia/Kolkata';
    $maintenance_mode = 'off';
    $can_send_mail = 'on';

    // 4. Insert into society_site_options
    $insert_query = "INSERT INTO society_site_options (
        society_unique_id, 
        site_title,
        site_fullname, 
        site_url, 
        dashboard_url, 
        timezone, 
        maintenance_mode, 
        logo,
        footer_text, 
        footer_right_text, 
        webmail_host, 
        webmail_username, 
        webmail_auth, 
        webmail_port, 
        can_send_mail
    ) VALUES (
        '$society_id', 
        '$legal_name',
        '$legal_name', 
        '$site_url', 
        '$dashboard_url', 
        '$timezone', 
        '$maintenance_mode', 
        '$logo',
        '{$defaults['footer_text']}', 
        '{$defaults['footer_right_text']}', 
        '{$defaults['webmail_host']}', 
        '{$defaults['webmail_username']}', 
        '{$defaults['webmail_auth']}', 
        '{$defaults['webmail_port']}', 
        '$can_send_mail'
    )";

    if ($con->query($insert_query)) {
        return ['status' => 'success', 'message' => 'Society site options initialized successfully.'];
    } else {
        return ['status' => 'error', 'message' => 'Options init database error: ' . $con->error];
    }
}
?>
