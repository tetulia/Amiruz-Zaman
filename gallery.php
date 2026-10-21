<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="utf-8">
    <title>Gallery</title>

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

  <section class="gallery-section container-fluid py-5">
    <h2 class="text-center mb-3">বিদ্যালয়ের গ্যালারি</h2>
    <p class="text-center text-muted mb-4">স্মৃতির পাতায় আমাদের অতীত</p>

    <div class="row g-3">
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/Foot Ball Team-22.jpg" alt="ছবি ১" class="img-fluid">
          <div class="gallery-caption">ফুটবল টিম<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/School-10 (2).jpg" alt="ছবি ২" class="img-fluid">
          <div class="gallery-caption">বিদ্যালয় ভবন<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/xx1.jpg" alt="ছবি ৩" class="img-fluid">
          <div class="gallery-caption">ক্রীড়া অনুষ্ঠান<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/xx2.jpg" alt="ছবি ৪" class="img-fluid">
          <div class="gallery-caption">সাংস্কৃতিক অনুষ্ঠান<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/Foot Ball Team-22.jpg" alt="ছবি ১" class="img-fluid">
          <div class="gallery-caption">ফুটবল টিম<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/School-10 (2).jpg" alt="ছবি ২" class="img-fluid">
          <div class="gallery-caption">বিদ্যালয় ভবন<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/xx1.jpg" alt="ছবি ৩" class="img-fluid">
          <div class="gallery-caption">ক্রীড়া অনুষ্ঠান<br>২০/০৮/২০২৫</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="gallery-item">
          <img src="images/gallery/xx2.jpg" alt="ছবি ৪" class="img-fluid">
          <div class="gallery-caption">সাংস্কৃতিক অনুষ্ঠান<br>২০/০৮/২০২৫</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fullscreen Modal -->
  <div id="imgModal" class="modal">
    <span class="close">&times;</span>
    <!--<span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>-->
    
    <img class="modal-content" id="fullImg">
  </div>

  <!-- Bootstrap JS (needed for responsive navbar if you use it) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/script.js"></script>
  <!-- Gallery Script -->
  <script src="js/gallery.js"></script>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
