<?php 
    $site_url = "";
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../../");
?>