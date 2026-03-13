<?php
    function get_hero_section_data($hero_content_key) {
        global $con;
        
        $stmt = mysqli_prepare($con, "SELECT hero_content_value FROM hero_section WHERE hero_content_key = ? LIMIT 1");
        mysqli_stmt_bind_param($stmt, 's', $hero_content_key);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        
        if (!$row) {
            return null;
        }
        
        $value = $row['hero_content_value'];
        
        // Fetch nested options first (with skip_replacement=true to prevent recursion)
        $site_fullname = get_site_option('site_fullname', true);
        $site_title = get_site_option('site_title', true);
        $site_url = get_site_option('site_url', true);
        $admin_email = get_site_option('admin_email', true);
        
        // Replace placeholders
        $replacements = [
            '{year}' => date('Y'),
            '{month}' => date('F'),
            '{date}' => date('Y-m-d'),
            '{time}' => date('H:i:s'),
            '{day}' => date('d'),
            '{site_fullname}' => $site_fullname,
            '{site_title}' => $site_title,
            '{site_url}' => $site_url,
            '{admin_email}' => $admin_email,
            '{current_user}' => isset($_SESSION['member_email']) ? $_SESSION['member_email'] : 'Guest'
        ];
        
        foreach ($replacements as $placeholder => $replacement) {
            if ($replacement !== null) {
                $value = str_replace($placeholder, $replacement, $value);
            }
        }
        
        return $value;
    }
?>