<?php
    require_once 'dbconfig.php';
    session_start();
    
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: loginpage.php");
        $connect->close();
        exit;
    }
    
?>