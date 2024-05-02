<?php

    $protocol = "https://";
    $domain = "localhost/";
    $dir = "cam2rescue-v1/Cam2RescueV1";
    $base_url = $protocol . $domain . $dir . "/";

    define('BASE_URL', $base_url);

    // $current_script = $_SERVER['REQUEST_URI'];
    


    // if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
    //     // Redirect to modules/home/index.php
    //     header("Location: " . BASE_URL . "modules/home/index.php");
    //     exit();
    // }
    // $current_script = $_SERVER['PHP_SELF'];
    // echo '<pre>';
    // print_r(basename($current_script));
    // echo '</pre>';
    // exit;
    // // Check if the current script is not modules/home/index.php
    // if (basename($current_script) !== 'index.php') {
    //     // Redirect to modules/home/index.php
    //     header("Location: " . BASE_URL . "modules/home/index.php");
    //     exit();
    // }




?>