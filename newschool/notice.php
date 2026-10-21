<?php
$pageTitle = "নোটিশ বোর্ড";
include 'includes/header.php';

$notices = [
  [
    "id" => 1,
    "day" => "০৮",
    "month" => "জুলাই ২০২৬",
    "title" => "অতিরিক্ত বৃষ্টি ও প্রাকৃতিক দুর্যোগের কারণে স্কুল ছুটি সংক্রান্ত",
    "category" => "ছুটি",
    "description" => "টানা প্রবল বর্ষণ ও বিদ্যালয় মাঠ জলমগ্ন হওয়ার কারণে শিক্ষার্থীদের সুরক্ষার্থে আগামীকালের সকল ক্লাস স্থগিত ঘোষণা করা হলো। পরবর্তী নোটিশে ক্লাসের তারিখ জানানো হবে।",
    "badge_class" => "bg-danger"
  ],
  [
    "id" => 2,
    "day" => "১৫",
    "month" => "জুলাই ২০২৬",
    "title" => "জরুরি অভিভাবক সমাবেশ ও পরামর্শ সভা",
    "category" => "সভা",
    "description" => "আগামী ১৫ই জুলাই সকাল ১০:০০ ঘটিকায় বিদ্যালয়ের মিলনায়তনে সকল শ্রেণির শিক্ষার্থীদের অভিভাবক নিয়ে এক মতবিনিময় সভা অনুষ্ঠিত হবে। সকল অভিভাবককে যথাসময়ে উপস্থিত থাকতে অনুরোধ করা হলো।",
    "badge_class" => "bg-primary"
  ],
  [
    "id" => 3,
    "day" => "২২",
    "month" => "জুলাই ২০২৬",
    "title" => "বার্ষিক ক্রীড়া ও মেধা পুরস্কার বিতরণী অনুষ্ঠান",
    "category" => "অনুষ্ঠান",
    "description" => "বিদ্যালয়ের আন্তঃশ্রেণি ক্রীড়া ও সাংস্কৃতিক প্রতিযোগিতায় বিজয়ী শিক্ষার্থীদের মাঝে আগামী ২২শে জুলাই আনুষ্ঠানিকভাবে আকর্ষণীয় পুরস্কার ও সনদ বিতরণ করা হবে।",
    "badge_class" => "bg-success"
  ],
  [
    "id" => 4,
    "day" => "০৫",
    "month" => "আগস্ট ২০২৬",
    "title" => "দ্বিতীয় সাময়িক পরীক্ষা ২০২৬ এর সময়সূচি প্রকাশ",
    "category" => "পরীক্ষা",
    "description" => "প্রাক-প্রাথমিক থেকে পঞ্চম শ্রেণির শিক্ষার্থীদের ২য় সাময়িক পরীক্ষার রুটিন প্রকাশিত হয়েছে। শিক্ষার্থীরা ওয়েবসাইট থেকে রুটিন সংগ্রহ করতে পারবে।",
    "badge_class" => "bg-warning text-dark"
  ],
  [
    "id" => 5,
    "day" => "১৫",
    "month" => "আগস্ট ২০২৬",
    "title" => "জাতীয় শোক দিবস ও দোয়া মাহফিল সংক্রান্ত বিজ্ঞপ্তি",
    "category" => "দিবস",
    "description" => "যথাযোগ্য মর্যাদায় জাতীয় শোক দিবস পালন উপলক্ষে চিত্রাঙ্কন প্রতিযোগিতা, আলোচনা সভা ও দোয়া মাহফিলের আয়োজন করা হয়েছে।",
    "badge_class" => "bg-dark"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">জরুরি ঘোষণা</span>
    <h1 class="display-5 fw-bold mb-2">ডিজিটাল নোটিশ বোর্ড</h1>
    <p class="lead opacity-90 mb-0">বিদ্যালয়ের সকল দাপ্তরিক বিজ্ঞপ্তি, ছুটির নোটিশ ও পরীক্ষার সময়সূচি</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6">
        <div class="input-group shadow-sm rounded-pill overflow-hidden border">
          <span class="input-group-text bg-white border-0 ps-4"><i class="ti-search text-muted"></i></span>
          <input type="text" id="noticeSearchInput" class="form-control border-0 py-3" placeholder="নোটিশের শিরোনাম বা বিষয় দিয়ে খুঁজুন...">
        </div>
      </div>
    </div>

    <div class="mx-auto" style="max-width: 880px;" id="noticeListContainer">
      <?php foreach ($notices as $n): ?>
      <div class="notice-card" data-title="<?php echo strtolower($n['title'] . ' ' . $n['category']); ?>">
        <div class="notice-date-box">
          <div class="day"><?php echo $n['day']; ?></div>
          <div class="month"><?php echo $n['month']; ?></div>
        </div>
        <div class="notice-content">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge <?php echo $n['badge_class']; ?> rounded-pill px-3"><?php echo $n['category']; ?></span>
            <small class="text-muted"><i class="ti-pin-alt"></i> বিজ্ঞপ্তি নং: GPS-<?php echo $n['id']; ?></small>
          </div>
          <h4 class="fw-bold"><?php echo $n['title']; ?></h4>
          <p><?php echo $n['description']; ?></p>
        </div>
        <div class="flex-shrink-0">
          <a href="#" class="btn btn-sm btn-outline-success rounded-pill px-3 py-2" onclick="alert('নোটিশটি ডাউনলোড হচ্ছে...'); return false;">
            <i class="ti-download me-1"></i> পিডিএফ
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.getElementById('noticeSearchInput')?.addEventListener('input', function(e) {
  const query = e.target.value.toLowerCase().trim();
  const cards = document.querySelectorAll('#noticeListContainer .notice-card');
  cards.forEach(card => {
    const title = card.getAttribute('data-title') || '';
    if (title.includes(query)) {
      card.style.display = 'flex';
    } else {
      card.style.display = 'none';
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>
