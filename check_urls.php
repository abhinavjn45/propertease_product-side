<?php
require_once('assets/includes/config/config.php');
require_once('assets/includes/functions/utility/details_fetcher.php');

$site_url = get_site_option('site_url');
$dashboard_url = get_site_option('dashboard_url');

echo "Site URL: " . $site_url . "\n";
echo "Dashboard URL: " . $dashboard_url . "\n";
?>
