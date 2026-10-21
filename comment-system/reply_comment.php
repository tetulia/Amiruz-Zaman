<?php
include 'db.php';
include 'config.php';
session_start();

if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in']!==true){
    echo "error: not admin";
    exit;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $parent_id = intval($_POST['id']);
    $reply_text = $conn->real_escape_string($_POST['reply']);

    $sql = "INSERT INTO school_comments (parent_id, name, designation, comment) 
            VALUES ($parent_id, 'Admin', '(প্র.শি.)', '$reply_text')";
    if($conn->query($sql)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
