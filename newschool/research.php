<?php
$pageTitle = "গবেষণা ও চিন্তাধারা";
include 'includes/header.php';

$researchPapers = [
  [
    "title" => "প্রাথমিক স্তরে পাঠ্যবইয়ের পরিমার্জন ও বয়সোপযোগী পাঠ্যসূচি",
    "author" => "মোঃ রহমান",
    "role" => "শিক্ষা গবেষক ও প্রশিক্ষক",
    "date" => "২৬ আগস্ট, ২০২৫",
    "excerpt" => "আমাদের প্রাথমিক শিক্ষা স্তরের পাঠ্যবইগুলো আরও আনন্দদায়ক ও ব্যবহারিকমুখী হওয়া প্রয়োজন। মুখস্থবিদ্যার বদলে হাতে-কলমে শেখার সুযোগ শিশুদের মস্তিষ্ককে প্রখর করে তোলে।",
    "tags" => ["পাঠ্যক্রম", "কারিকুলাম"]
  ],
  [
    "title" => "প্রাথমিক শিক্ষকের পেশাদারিত্ব ও মানসিক সুস্থতা",
    "author" => "সালমা আক্তার",
    "role" => "সহকারী উপজেলা শিক্ষা কর্মকর্তা",
    "date" => "২৫ আগস্ট, ২০২৫",
    "excerpt" => "শিক্ষা হলো মানব জীবনের সবচেয়ে গুরুত্বপূর্ণ বুনিয়াদ। একজন প্রেষিত ও মানসিক প্রশান্তিতে থাকা শিক্ষকই শ্রেণিকক্ষে শিক্ষার্থীদের মাঝে ইতিবাচক শক্তির সঞ্চার করতে পারেন।",
    "tags" => ["পেশাদারিত্ব", "প্রশিক্ষণ"]
  ],
  [
    "title" => "গ্রামাঞ্চলের প্রাথমিক বিদ্যালয়ে ডিজিটাল প্রযুক্তির প্রায়োগিক ব্যবহার",
    "author" => "মোঃ আব্দুল্লাহ",
    "role" => "আইসিটি ইন এডুকেশন ট্রেইনার",
    "date" => "২৪ আগস্ট, ২০২৫",
    "excerpt" => "সীমিত সম্পদের মধ্যেও মাল্টিমিডিয়া ক্লাসরুম ও সহজলভ্য অ্যানিমেশনের সাহায্যে প্রত্যন্ত অঞ্চলের প্রাথমিক বিদ্যালয়ে কীভাবে চমকপ্রদ ফলাফল আনা সম্ভব তার মাঠপর্যায়ের সমীক্ষা।",
    "tags" => ["আইসিটি", "উদ্ভাবন"]
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">কলমের আঁচড়ে চিন্তা</span>
    <h1 class="display-5 fw-bold mb-2">গবেষণা ও নিবন্ধ</h1>
    <p class="lead opacity-90 mb-0">প্রাথমিক শিক্ষা, শিখন পদ্ধতি, শিক্ষানীতি ও শিক্ষা প্রযুক্তি নিয়ে সুচিন্তিত গবেষণা ও মতামত</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="row g-4 mb-5">
      <?php foreach ($researchPapers as $p): ?>
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 d-flex flex-column" style="background: var(--bg-surface); border: 1px solid var(--border-color);">
          <div class="d-flex gap-2 mb-3">
            <?php foreach ($p['tags'] as $t): ?>
            <span class="badge bg-success-subtle text-success"><?php echo $t; ?></span>
            <?php endforeach; ?>
          </div>
          <h4 class="fw-bold mb-3 text-success fs-5"><?php echo $p['title']; ?></h4>
          <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.7;">
            <?php echo $p['excerpt']; ?>
          </p>
          <hr class="my-3 opacity-25">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <div class="fw-bold small"><?php echo $p['author']; ?></div>
              <small class="text-muted"><?php echo $p['date']; ?></small>
            </div>
            <button class="btn btn-sm btn-outline-success rounded-pill px-3" onclick="alert('নিবন্ধটির বিস্তারিত পিডিএফ শীঘ্রই উন্মুক্ত করা হবে।')">
              পড়ুন <i class="ti-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Call for articles -->
    <div class="p-5 rounded-4 shadow text-center" style="background: var(--bg-surface-elevated); border: 2px dashed var(--primary-light);">
      <h3 class="fw-bold text-success mb-2">আপনার গবেষণাধর্মী লেখা প্রকাশ করতে চান?</h3>
      <p class="text-muted mb-4" style="max-width: 650px; margin: 0 auto;">
        দেশের প্রাথমিক শিক্ষা ব্যবস্থার উন্নয়ন, শিক্ষক প্রশিক্ষণ বা শ্রেণিকক্ষ ব্যবস্থাপনায় আপনার যেকোনো উদ্ভাবনী আইডিয়া বা গবেষণা প্রবন্ধ আমাদের মাধ্যমে ছড়িয়ে দিন।
      </p>
      <a href="contact.php" class="btn btn-primary-custom">
        <i class="ti-pencil-alt me-1"></i> প্রবন্ধ জমা দিতে যোগাযোগ করুন
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
