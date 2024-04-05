<?php
session_start();

require '../../index.php'; 

if(isset($_SESSION['userID'])) {
    unset($_SESSION['userID']);
    session_destroy();
    header('Location: ' . BASE_URL . 'modules/login/login.php');
    exit(); 
}

?>
