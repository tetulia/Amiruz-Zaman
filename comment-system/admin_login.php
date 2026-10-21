<?php
session_start();
include 'config.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $pass = trim($_POST['admin_password']);
    if($pass === $admin_password){
        $_SESSION['admin_logged_in'] = true;
        echo "success";
    } else {
        echo "error";
    }
}
?>
