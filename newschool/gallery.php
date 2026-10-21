<?php
$pageTitle = "ফটো গ্যালারি";
include 'includes/header.php';

$galleryItems = [
  [
    "image" => "../images/gallery/Foot Ball Team-22.jpg",
    "title" => "বিদ্যালয় ফুটবল একাদশ",
    "date" => "২০ আগস্ট, ২০২৫",
    "category" => "sports"
  ],
  [
    "image" => "../images/gallery/School-10 (2).jpg",
    "title" => "বিদ্যালয় মূল ভবন ও প্রাঙ্গণ",
    "date" => "১৫ জুন, ২০২৫",
    "category" => "campus"
  ],
  [
    "image" => "../images/gallery/xx1.jpg",
    "title" => "বার্ষিক ক্রীড়া প্রতিযোগিতা ও দৌড়",
    "date" => "১০ ফেব্রুয়ারি, ২০২৫",
    "category" => "sports"
  ],
  [
    "image" => "../images/gallery/xx2.jpg",
    "title" => "সাংস্কৃতিক অনুষ্ঠান ও নৃত্য পরিবেশনা",
    "date" => "২১ ফেব্রুয়ারি, ২০২৫",
    "category" => "culture"
  ],
  [
    "image" => "../images/slider/school-1.jpg",
    "title" => "জাতীয় পতাকা উত্তোলন ও সমাবেশ",
    "date" => "২৬ মার্চ, ২০২৫",
    "category" => "national"
  ],
  [
    "image" => "../images/activities/vaccin.jpg",
    "title" => "টাইফয়েড ভ্যাকসিনেশন ক্যাম্পেইন",
    "date" => "১৪ অক্টোবর, ২০২৫",
    "category" => "campus"
  ],
  [
    "image" => "../images/activities/blood-test.jpg",
    "title" => "রক্তের গ্রুপ পরীক্ষা ক্যাম্প",
    "date" => "০৬ সেপ্টেম্বর, ২০২২",
    "category" => "campus"
  ],
  [
    "image" => "../images/slider/school-2.jpg",
    "title" => "মাল্টিমিডিয়া ক্লাসরুমে পাঠদান",
    "date" => "০৫ মে, ২০২৫",
    "category" => "campus"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">স্মৃতির পাতা</span>
    <h1 class="display-5 fw-bold mb-2">বিদ্যালয়ের ফটো গ্যালারি</h1>
    <p class="lead opacity-90 mb-0">ক্যাম্পাসের আনন্দঘন মুহূর্ত, ক্রীড়া উৎসব ও সাংস্কৃতিক কর্মকাণ্ডের অ্যালবাম</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <!-- Category Filter Bar -->
    <div class="gallery-filter-bar">
      <button type="button" class="filter-btn active" data-filter="all">সব ছবি</button>
      <button type="button" class="filter-btn" data-filter="campus">ক্যাম্পাস ও পরিবেশ</button>
      <button type="button" class="filter-btn" data-filter="sports">খেলাধুলা ও প্রতিযোগিতা</button>
      <button type="button" class="filter-btn" data-filter="culture">সাংস্কৃতিক অনুষ্ঠান</button>
      <button type="button" class="filter-btn" data-filter="national">জাতীয় দিবস</button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid">
      <?php foreach ($galleryItems as $item): ?>
      <div class="gallery-card" data-category="<?php echo $item['category']; ?>">
        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
        <div class="gallery-overlay">
          <div>
            <h5><?php echo $item['title']; ?></h5>
            <span><i class="ti-calendar me-1"></i><?php echo $item['date']; ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Fullscreen Modal Lightbox -->
<div class="custom-modal" id="galleryModal">
  <div class="modal-content-wrap">
    <button class="modal-close-btn" aria-label="বন্ধ করুন">&times;</button>
    <img src="" id="modalImage" alt="বড় ছবি">
    <h4 id="modalCaption" class="text-white mt-3 fw-bold"></h4>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
