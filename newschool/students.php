<?php
$pageTitle = "শিক্ষার্থী তথ্য";
include 'includes/header.php';

// Class statistics summary
$classesSummary = [
  ["name" => "প্রাক-প্রাথমিক", "boys" => 14, "girls" => 18, "total" => 32],
  ["name" => "প্রথম শ্রেণি", "boys" => 16, "girls" => 19, "total" => 35],
  ["name" => "দ্বিতীয় শ্রেণি", "boys" => 18, "girls" => 15, "total" => 33],
  ["name" => "তৃতীয় শ্রেণি", "boys" => 20, "girls" => 22, "total" => 42],
  ["name" => "চতুর্থ শ্রেণি", "boys" => 17, "girls" => 19, "total" => 36],
  ["name" => "পঞ্চম শ্রেণি", "boys" => 21, "girls" => 24, "total" => 45],
];

// Sample showcase students
$showcaseStudents = [
  [
    "name" => "মোছাঃ সিনথিয়া জান্নাত",
    "class" => "প্রাক-প্রাথমিক",
    "roll" => "১",
    "father" => "আবু বকর",
    "attendance" => "৯৯%",
    "image" => "../images/students/pre-primary/sinthia.jpg",
    "status" => "মেধাবী ও নিয়মিত"
  ],
  [
    "name" => "মোছাঃ সাদিয়া আকতার",
    "class" => "প্রাক-প্রাথমিক",
    "roll" => "২",
    "father" => "রফিকুল",
    "attendance" => "৮১%",
    "image" => "../images/students/pre-primary/sadia.jpg",
    "status" => "নিয়মিত"
  ],
  [
    "name" => "আফসানা মিমি",
    "class" => "প্রথম শ্রেণি",
    "roll" => "১",
    "father" => "মোজাম্মেল হক",
    "attendance" => "৯৫%",
    "image" => "../images/students/pre-primary/sinthia.jpg",
    "status" => "মেধাবী ও চটপটে"
  ],
  [
    "name" => "মোঃ আল-আমিন",
    "class" => "পঞ্চম শ্রেণি",
    "roll" => "১",
    "father" => "শাহাদাত হোসেন",
    "attendance" => "৯৮%",
    "image" => "../images/students/pre-primary/sadia.jpg",
    "status" => "রোল ১ ও দলনেতা"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">একাডেমিক প্রোফাইল</span>
    <h1 class="display-5 fw-bold mb-2">শিক্ষার্থী তথ্য ও পরিসংখ্যান</h1>
    <p class="lead opacity-90 mb-0">আমাদের ভবিষ্যৎ কর্ণধার সোনামণিদের শ্রেণিভিত্তিক তথ্য ও উপস্থিতি চিত্র</p>
  </div>
</div>

<!-- Class Statistics Overview -->
<section class="section-padding">
  <div class="container">
    <div class="section-head">
      <span class="section-eyebrow">শ্রেণিভিত্তিক এনরোলমেন্ট</span>
      <h2 class="section-title">শ্রেণিভিত্তিক শিক্ষার্থী সংখ্যা</h2>
      <p class="section-subtitle">চলতি শিক্ষাবর্ষের সকল শ্রেণির ছাত্র-ছাত্রীর তালিকা ও অনুপাত</p>
    </div>

    <div class="row g-4 mb-5">
      <?php foreach ($classesSummary as $cs): ?>
      <div class="col-lg-4 col-md-6">
        <div class="p-4 rounded-4 shadow-sm border h-100" style="background: var(--bg-surface); transition: var(--transition);">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0 text-success"><?php echo $cs['name']; ?></h4>
            <span class="badge bg-primary px-3 py-2 rounded-pill fs-6"><?php echo $cs['total']; ?> জন</span>
          </div>
          <div class="row text-center g-2 pt-2 border-top">
            <div class="col-6">
              <div class="p-2 rounded bg-light">
                <span class="d-block text-muted small">ছাত্র</span>
                <strong class="text-primary fs-5"><?php echo $cs['boys']; ?> জন</strong>
              </div>
            </div>
            <div class="col-6">
              <div class="p-2 rounded bg-light">
                <span class="d-block text-muted small">ছাত্রী</span>
                <strong class="text-danger fs-5"><?php echo $cs['girls']; ?> জন</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Student Cards Gallery -->
    <div class="section-head mt-5">
      <span class="section-eyebrow">শিক্ষার্থী গ্যালারি</span>
      <h2 class="section-title">নমুনা শিক্ষার্থী তালিকা</h2>
      <p class="section-subtitle">নিয়মিত উপস্থিতি ও ধারাবাহিক অগ্রগতি পর্যবেক্ষণ পদ্ধতি</p>
    </div>

    <div class="row g-4">
      <?php foreach ($showcaseStudents as $s): ?>
      <div class="col-lg-3 col-md-6 col-6">
        <div class="card border-0 shadow-sm rounded-4 text-center overflow-hidden h-100" style="background: var(--bg-surface); border: 1px solid var(--border-color);">
          <div style="height: 180px; overflow: hidden; background: #e2e8f0;">
            <img src="<?php echo $s['image']; ?>" alt="<?php echo $s['name']; ?>" class="w-100 h-100 object-fit-cover" onerror="this.src='../images/logo.jpg'">
          </div>
          <div class="card-body p-3">
            <span class="badge bg-success-subtle text-success mb-2"><?php echo $s['class']; ?> | রোল: <?php echo $s['roll']; ?></span>
            <h5 class="fw-bold mb-1 fs-6"><?php echo $s['name']; ?></h5>
            <p class="text-muted small mb-2">পিতা: <?php echo $s['father']; ?></p>
            <div class="d-flex justify-content-center align-items-center gap-2">
              <span class="badge bg-warning text-dark">উপস্থিতি: <?php echo $s['attendance']; ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
