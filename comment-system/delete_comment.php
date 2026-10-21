<?php
include 'db.php';
include 'config.php';
session_start();

if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in']!==true){
    echo "error: not admin";
    exit;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $id = intval($_POST['id']);
    $sql = "DELETE FROM school_comments WHERE id=$id OR parent_id=$id";
    if($conn->query($sql)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
