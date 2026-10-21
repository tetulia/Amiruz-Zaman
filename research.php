<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="utf-8">
    <title>research</title>

    <!-- Mobile Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Venobox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.6/venobox.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
      <?php include 'includes/header.php'; ?>

<body>
    <div class="article-title">
        <h1>কলমের আঁচড়ে আমাদের চিন্তা</h1>
        <p>এখানে প্রাথমিক শিক্ষা, শিক্ষার্থী, শিক্ষা প্রযুক্তি, শিক্ষা ব্যবস্থাপনা ও শিক্ষক- যে কোনো বিষয়ে আপনার সুচিন্তিত মতামত, গবেষণা তুলে ধরতে পারেন।
             যোগাযোগের জন্য <a href="<?php echo $base; ?>admin.php">admin</a>  -এ ক্লিক করুন। </p></div>
  <div class="blog-container">
    <!-- Post 1 -->
    <div class="blog-post">
      <h2>পাঠ্য বইয়ের পরিমার্জিন</h2>
      <div class="meta">
        <img src="authors/rahman.jpg" alt="Rahman">
        <span>✍️ মোঃ রহমান | 📅 ২৬ আগস্ট, ২০২৫</span>
      </div>
      <p>
        আমাদের প্রাথমিক শিক্ষা স্তরের পাঠ্য বইগুলো আরো ......... 
      </p>
      <button class="read-more" onclick="showArticle('article-container-1', 'articles/author1.pdf')">Read More</button>
    </div>

    <!-- Post 2 -->
    <div class="blog-post">
      <h2>পেশাদারিত্ব</h2>
      <div class="meta">
        <img src="authors/salma.jpg" alt="Salma">
        <span>✍️ সালমা আক্তার | 📅 ২৫ আগস্ট, ২০২৫</span>
      </div>
      <p>
        শিক্ষা হলো মানব জীবনের সবচেয়ে গুরুত্বপূর্ণ সম্পদ  
      </p>
      <button class="read-more" onclick="showArticle('article-container-2', 'articles/author2.pdf')">Read More</button>
    </div>

    <!-- Post 3 -->
    <div class="blog-post">
      <h2>প্রযুক্তির ব্যবহার</h2>
      <div class="meta">
        <img src="authors/abdullah.jpg" alt="Abdullah">
        <span>✍️ আব্দুল্লাহ | 📅 ২৪ আগস্ট, ২০২৫</span>
      </div>
      <p>
        আধুনিক প্রযুক্তি আমাদের জীবনকে সহজ করেছে...  
      </p>
      <button class="read-more" onclick="showArticle('article-container-3', 'articles/author3.pdf')">Read More</button>
    </div>

  </div>

  <!-- Article Container 1 -->
  <div id="article-container-1" class="article-container">
    <div class="article-content">
        <span class="close-button" onclick="hideArticle('article-container-1')">&times;</span>
        <embed id="article-content-1" src="" width="100%" height="600px" type="application/pdf">
    </div>
  </div>

  <!-- Article Container 2 -->
  <div id="article-container-2" class="article-container">
    <div class="article-content">
        <span class="close-button" onclick="hideArticle('article-container-2')">&times;</span>
        <embed id="article-content-2" src="" width="100%" height="600px" type="application/pdf">
    </div>
  </div>

    <!-- Article Container 3 -->
    <div id="article-container-3" class="article-container">
        <div class="article-content">
            <span class="close-button" onclick="hideArticle('article-container-3')">&times;</span>
            <embed id="article-content-3" src="" width="100%" height="600px" type="application/pdf">
        </div>
    </div>

  <script>
    function showArticle(containerId, pdfUrl) {
        document.getElementById(containerId).style.display = 'block';
        document.getElementById(containerId.replace('article-container', 'article-content')).src = pdfUrl;
    }

    function hideArticle(containerId) {
        document.getElementById(containerId).style.display = 'none';
    }
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
    <script src="js/script.js"></script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>