<?php
session_start();
$base = "/abc/"; //  রুট ফোল্ডারের path
?>

<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>কমেন্ট সিস্টেম</title>

  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Themify Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
  <!-- Custom CSS -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="comment.css" rel="stylesheet"> 
 

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
</head>

<body class="container">    
    <div class="back-button">
        <a href="<?php echo $base; ?>" class="btn btn-secondary mb-3">← ফিরে যান</a>
        <div class="comment-page-title">
            <h2>সকল মতপার্থক্য থাকা সত্ত্বেও আমরা শান্তিপূর্ণ সহাবস্থানে বিশ্বাসী</h2>
        </div>
    </div>
    <!-- Page Content -->
    <h3 class="mb-4 mt-5 pt-4">💬 মতামত/পরামর্শ</h3>

        <!-- সাধারণ কমেন্ট ফর্ম -->
   <form id="commentForm" class="mb-4">
        <div class="mb-2">
        <input type="text" name="name" class="form-control" placeholder="নাম *" required>
        </div>
        <div class="mb-2">
        <input type="text" name="designation" class="form-control" placeholder="পদবী *" required>
        </div>
        <div class="mb-2">
        <input type="text" name="phone" class="form-control" placeholder="ফোন (ঐচ্ছিক)">
        </div>
        <div class="mb-2">
        <textarea name="comment" class="form-control" placeholder="আপনার মন্তব্য লিখুন *" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">সাবমিট করুন</button>
    </form>

        <!-- Admin Login Form -->
     <?php if(!isset($_SESSION['admin_logged_in'])): ?>
    <form id="adminLoginForm" class="mb-4">
        <h5>🔑 এডমিন লগইন</h5>
        <div class="mb-2">
            <input type="password" name="admin_password" class="form-control" placeholder="পাসওয়ার্ড" required>
        </div>
        <button type="submit" class="btn btn-danger">লগইন (এডমিন) </button>
    </form>
        <?php else: ?>
        <div class="mb-3">
        <strong>✅ এডমিন লগইন করা হয়েছে</strong>
        <a href="logout.php" class="btn btn-sm btn-outline-danger">লগআউট</a>
        </div>
           <?php endif; ?>

         <!-- Comments List -->
        <div id="comments"></div>

    <!-- JS -->
    <script>
    function loadComments(){
        $("#comments").load("load_comments.php");
    }
    $(document).ready(function(){

        loadComments();

        $("#commentForm").on("submit", function(e){
            e.preventDefault();
            $.post("add_comment.php", $(this).serialize(), function(response){
                if(response=="success"){
                    $("#commentForm")[0].reset();
                    loadComments();
                } else {
                    alert("কমেন্ট যোগ করা যায়নি");
                }
            });
        });

        $("#adminLoginForm").on("submit", function(e){
            e.preventDefault();
            $.post("admin_login.php", $(this).serialize(), function(response){
                if(response=="success"){
                    location.reload();
                } else {
                    alert("পাসওয়ার্ড ভুল");
                }
            });
        });

        $(document).on("submit", ".replyForm", function(e){
            e.preventDefault();
            var form = $(this);
            $.post("reply_comment.php", form.serialize() + "&id=" + form.data("id"), function(response){
                if(response=="success"){
                    loadComments();
                } else {
                    alert("রিপ্লাই যোগ করা যায়নি");
                }
            });
        });

        $(document).on("click", ".delete-btn", function(){
            if(confirm("আপনি কি সত্যিই মুছে ফেলতে চান?")){
                var id = $(this).data("id");
                $.post("delete_comment.php", {id:id}, function(response){
                    if(response=="success"){
                        loadComments();
                    } else {
                        alert("ডিলিট করা যায়নি");
                    }
                });
            }
        });

    });
    </script>
    <script>
        $(window).on('load', function() {
            $(".preloader").fadeOut("slow");
        });
    </script>
     <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Venobox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.6/venobox.min.js"></script>
    <!-- Custom Script -->
    <script src="../js/script.js"></script>


</body>
</html>
