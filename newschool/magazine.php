<?php
$pageTitle = "স্কুল ম্যাগাজিন";
include 'includes/header.php';

$articles = [
  [
    "title" => "আমাদের প্রিয় বিদ্যালয়",
    "author" => "সুমাইয়া জান্নাত (৫ম শ্রেণি)",
    "category" => "কবিতা",
    "badge_class" => "bg-primary",
    "excerpt" => "সবুজ ঘাসের খেলার মাঠ, ফুলের বাগান হাসে / জ্ঞানের আলো ছড়িয়ে দিতে মোরা আসি প্রতিদিন পাশে। শিক্ষাগুরুর স্নেহমাখা মুখের মধুর বাণী / অম্রবাড়ীর এই প্রাঙ্গণে জীবন গড়ি আমি।",
    "date" => "ফেব্রুয়ারি ২০২৬"
  ],
  [
    "title" => "পরিবেশ পরিচ্ছন্নতা ও আমাদের দায়িত্ব",
    "author" => "মোঃ তানভীর হাসান (৪র্থ শ্রেণি)",
    "category" => "প্রবন্ধ",
    "badge_class" => "bg-success",
    "excerpt" => "বিদ্যালয় প্রাঙ্গণ পরিচ্ছন্ন রাখা আমাদের সবার দায়িত্ব। ময়লা-আবর্জনা নির্দিষ্ট ডাস্টবিনে ফেলা উচিত। পরিবেশ ভালো থাকলে স্বাস্থ্য ও মন দুটোই ভালো থাকে।",
    "date" => "মার্চ ২০২৬"
  ],
  [
    "title" => "ছোট্ট পাখির গল্প",
    "author" => "রাইসা আক্তার (৩য় শ্রেণি)",
    "category" => "গল্প",
    "badge_class" => "bg-warning text-dark",
    "excerpt" => "একদিন একটি দোয়েল পাখি আমাদের ক্লাসের জানালার পাশে এসে গান শোনাল। ওর মিষ্টি সুরে পুরো ক্লাস মুগ্ধ হয়ে গেল। আমরা সবাই পাখিদের খুব ভালোবাসি।",
    "date" => "এপ্রিল ২০২৬"
  ],
  [
    "title" => "প্রাথমিক শিক্ষায় নৈতিকতার গুরুত্ব",
    "author" => "মোঃ আমিরুজ্জামান (প্রধান শিক্ষক)",
    "category" => "শিক্ষক কলাম",
    "badge_class" => "bg-info text-dark",
    "excerpt" => "শৈশবে যে বীজ রোপণ করা হয়, পরিণত বয়সে তা-ই ফল দেয়। শিশুদের সততা, পরমতসহিষ্ণুতা ও দেশপ্রেমের শিক্ষা পাঠ্যবইয়ের চেয়েও বেশি গুরুত্বপূর্ণ।",
    "date" => "মে ২০২৬"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">সৃজনশীল সাহিত্য ও শিল্পকলা</span>
    <h1 class="display-5 fw-bold mb-2">বিদ্যালয় দেয়ালিকা ও ম্যাগাজিন</h1>
    <p class="lead opacity-90 mb-0">আমাদের শিক্ষক ও কোমলমতি শিক্ষার্থীদের স্বরচিত কবিতা, গল্প, প্রবন্ধ ও চিত্রকর্মের উন্মুক্ত মঞ্চ</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="row g-4 mb-5">
      <?php foreach ($articles as $art): ?>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100" style="background: var(--bg-surface); border: 1px solid var(--border-color);">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="badge <?php echo $art['badge_class']; ?> rounded-pill px-3 py-2"><?php echo $art['category']; ?></span>
            <small class="text-muted"><i class="ti-calendar me-1"></i><?php echo $art['date']; ?></small>
          </div>
          <h3 class="fw-bold mb-2 fs-4 text-success"><?php echo $art['title']; ?></h3>
          <p class="text-muted small mb-3"><i class="ti-pencil-alt me-1"></i> রচনায়: <strong><?php echo $art['author']; ?></strong></p>
          <div class="p-3 rounded-3 mb-3" style="background: var(--primary-subtle); line-height: 1.8; font-style: italic;">
            "<?php echo $art['excerpt']; ?>"
          </div>
          <div class="mt-auto text-end">
            <button class="btn btn-sm btn-outline-success rounded-pill px-3" onclick="alert('সম্পূর্ণ লেখাটি পড়তে বিদ্যালয়ের বাৎসরিক সাময়িকী সংগ্রহ করুন।')">
              সম্পূর্ণ পড়ুন <i class="ti-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Submission Box -->
    <div class="p-5 rounded-4 text-center shadow" style="background: var(--primary-gradient); color: #fff;">
      <h3 class="fw-bold mb-2">তোমার সৃজনশীল লেখা পাঠাও!</h3>
      <p class="mb-4 opacity-90" style="max-width: 600px; margin: 0 auto;">
        তুমি কি গল্প, কবিতা বা ছবি আঁকতে ভালোবাসো? বিদ্যালয়ের আগামী ম্যাগাজিন সংখ্যায় তোমার লেখা ও শিল্পকর্ম প্রকাশ করতে তোমার শিক্ষকের সাথে যোগাযোগ করো অথবা অনলাইন মতামত ফর্মের মাধ্যমে পাঠাও।
      </p>
      <a href="contact.php" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-dark">
        <i class="ti-write me-1"></i> লেখা জমা দিন
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
