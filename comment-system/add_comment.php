<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name        = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $comment     = $conn->real_escape_string($_POST['comment']);
    $phone       = !empty($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : NULL;

    $sql = "INSERT INTO school_comments (parent_id, name, designation, phone, comment)
            VALUES (0, '$name', '$designation', ".($phone ? "'$phone'" : "NULL").", '$comment')";

    if($conn->query($sql)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
