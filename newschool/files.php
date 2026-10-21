<?php
$pageTitle = "ফাইল ও সিলেবাস ডাউনলোড";
include 'includes/header.php';

$filesList = [
  [
    "title" => "চলতি শিক্ষাবর্ষের সার্বিক ক্লাস রুটিন (১ম থেকে ৫ম শ্রেণি)",
    "category" => "রুটিন",
    "type" => "PDF",
    "size" => "১.৪ MB",
    "date" => "০১ জানুয়ারি, ২০২৬"
  ],
  [
    "title" => "১ম ও ২য় সাময়িক পরীক্ষার বিস্তারিত বিষয়ভিত্তিক সিলেবাস ২০২৬",
    "category" => "সিলেবাস",
    "type" => "PDF",
    "size" => "২.১ MB",
    "date" => "১৫ জানুয়ারি, ২০২৬"
  ],
  [
    "title" => "প্রাথমিক বিদ্যালয়ের বাৎসরিক সরকারি ছুটির তালিকা ২০২৬",
    "category" => "ছুটি",
    "type" => "PDF",
    "size" => "৮৫০ KB",
    "date" => "০২ জানুয়ারি, ২০২৬"
  ],
  [
    "title" => "নতুন ভর্তি ফরম ও শিক্ষার্থীর ব্যক্তিগত তথ্য বিবরণী",
    "category" => "ভর্তি",
    "type" => "DOCX",
    "size" => "৪২০ KB",
    "date" => "০৫ জানুয়ারি, ২০২৬"
  ],
  [
    "title" => "প্রশংসাপত্র ও স্থানান্তর (টিসি) সনদের আবেদনপত্র ফরম",
    "category" => "আবেদন",
    "type" => "PDF",
    "size" => "৫০০ KB",
    "date" => "১০ ফেব্রুয়ারি, ২০২৬"
  ],
  [
    "title" => "মাল্টিমিডিয়া ক্লাসরুমের প্রেজেন্টেশন ও ডিজিটাল কনটেন্ট গাইডলাইন",
    "category" => "আইসিটি",
    "type" => "PPTX",
    "size" => "৪.৮ MB",
    "date" => "২০ ফেব্রুয়ারি, ২০২৬"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">ডাউনলোড সেন্টার</span>
    <h1 class="display-5 fw-bold mb-2">প্রয়োজনীয় ফাইল ও সিলেবাস</h1>
    <p class="lead opacity-90 mb-0">বিদ্যালয়ের সিলেবাস, রুটিন, বার্ষিক ছুটির তালিকা ও বিভিন্ন প্রাতিষ্ঠানিক ফরম সংগ্রহ করুন</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="mx-auto" style="max-width: 900px;">
      <div class="table-responsive rounded-4 shadow-sm border overflow-hidden">
        <table class="table table-hover align-middle mb-0" style="background: var(--bg-surface);">
          <thead class="table-success">
            <tr>
              <th class="ps-4">ফাইলের নাম ও বিবরণ</th>
              <th>ধরন</th>
              <th>আকার</th>
              <th>প্রকাশের তারিখ</th>
              <th class="text-center pe-4">অ্যাকশন</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($filesList as $f): ?>
            <tr>
              <td class="ps-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="p-2 rounded bg-light text-success fs-4">
                    <i class="ti-file"></i>
                  </div>
                  <div>
                    <h6 class="mb-0 fw-bold"><?php echo $f['title']; ?></h6>
                    <span class="badge bg-success-subtle text-success small"><?php echo $f['category']; ?></span>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-secondary"><?php echo $f['type']; ?></span></td>
              <td class="num text-muted small"><?php echo $f['size']; ?></td>
              <td class="small text-muted"><?php echo $f['date']; ?></td>
              <td class="text-center pe-4">
                <a href="#" class="btn btn-sm btn-primary-custom" onclick="alert('<?php echo $f['title']; ?> ডাউনলোড শুরু হচ্ছে...'); return false;">
                  <i class="ti-download"></i> ডাউনলোড
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
