<?php
include 'db.php';
session_start();

// Load main comments
$sql = "SELECT * FROM school_comments WHERE parent_id = 0 ORDER BY id DESC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<div class='comment-box'>";
    echo "<strong>".htmlspecialchars($row['name'])."</strong> - ".htmlspecialchars($row['designation'])."<br>";
    if(!empty($row['phone'])){
        echo "<em>📞 ".htmlspecialchars($row['phone'])."</em><br>";
    }
    echo "<p>".nl2br(htmlspecialchars($row['comment']))."</p>";
    echo "<small>".$row['created_at']."</small>";

    // Admin controls
    if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']===true){
        echo "<div class='admin-controls'>";
        echo "<form class='replyForm mt-2' data-id='".$row['id']."'>
                <textarea name='reply' class='form-control mb-1' placeholder='এডমিন উত্তর লিখুন...' required></textarea>
                <button type='submit' class='btn btn-sm btn-success mb-2'>উত্তর দিন</button>
              </form>";
        echo "<button class='btn btn-sm btn-danger delete-btn' data-id='".$row['id']."'>ডিলিট</button>";
        echo "</div>";
    }

    // Load replies
    $rid = $row['id'];
    $sql2 = "SELECT * FROM school_comments WHERE parent_id = $rid ORDER BY id ASC";
    $replies = $conn->query($sql2);
    while($rep = $replies->fetch_assoc()){
        echo "<div class='reply-box'>";
        echo "<strong>".htmlspecialchars($rep['name'])."</strong> - ".htmlspecialchars($rep['designation'])."<br>";
        if(!empty($rep['phone'])){
            echo "<em>📞 ".htmlspecialchars($rep['phone'])."</em><br>";
        }
        echo "<p>".nl2br(htmlspecialchars($rep['comment']))."</p>";
        echo "<small>".$rep['created_at']."</small>";

        if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']===true){
            echo "<button class='btn btn-sm btn-danger delete-btn mt-1' data-id='".$rep['id']."'>ডিলিট</button>";
        }
        echo "</div>";
    }

    echo "</div><hr>";
}
?>
