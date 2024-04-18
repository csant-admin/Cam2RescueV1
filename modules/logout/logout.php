<?php
session_start();

require '../../index.php'; 

if(isset($_SESSION['userData'])) {
    unset($_SESSION['userData']);
    session_destroy();
    header('Location: ' . BASE_URL . 'modules/login/login.php');
    exit(); 
}

?>
