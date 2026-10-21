<?php
$pageTitle = "শিক্ষক পরিষদ";
include 'includes/header.php';

$teachers = [
  [
    "name" => "মোঃ আমিরুজ্জামান",
    "name_en" => "Md. Amiruzzaman",
    "designation" => "প্রধান শিক্ষক (চ.দা.)",
    "image" => "../images/teachers/azaman.jpg",
    "phone" => "+8801738-618666",
    "email" => "amiruzzaman090@gmail.com",
    "subject" => "প্রশাসন ও একাডেমিক তদারকি",
    "quote" => "একজন শিক্ষক শুধু পাঠ্যবইয়ের জ্ঞান নয়, বাস্তব জীবনের নীতি, নৈতিকতা ও মানবিক মূল্যবোধের বীজ বপন করেন শিশুর হৃদয়ে।"
  ],
  [
    "name" => "মোঃ ওয়াহেদুর রহমান",
    "name_en" => "Md. Wahedur Rahman",
    "designation" => "সহকারী শিক্ষক",
    "image" => "../images/teachers/liton.jpg",
    "phone" => "+8801700-000001",
    "email" => "wahedur.gps@gmail.com",
    "subject" => "গণিত ও বিজ্ঞান",
    "quote" => "সহজ ও আনন্দদায়ক কৌশলে গণিতের ভীতি দূর করে যুক্তিভিত্তিক চিন্তার বিকাশ ঘটানোই আমার লক্ষ্য।"
  ],
  [
    "name" => "মোছাঃ মকছুরা খাতুন",
    "name_en" => "Mst. Moksura Khatun",
    "designation" => "সহকারী শিক্ষক",
    "image" => "../images/teachers/moksura.jpg",
    "phone" => "+8801700-000002",
    "email" => "moksura.gps@gmail.com",
    "subject" => "বাংলা ও সাহিত্য",
    "quote" => "মাতৃভাষার সঠিক উচ্চারণ, পাঠাভ্যাস ও সৃজনশীল লেখনীর মাধ্যমে শিশুদের আত্মবিশ্বাসী করে তুলি।"
  ],
  [
    "name" => "মোঃ মোন্নাফ আলী মন্ডল",
    "name_en" => "Md. Monnaf Ali Mondol",
    "designation" => "সহকারী শিক্ষক",
    "image" => "../images/teachers/monnaf.jpg",
    "phone" => "+8801700-000003",
    "email" => "monnaf.gps@gmail.com",
    "subject" => "ইংরেজি ও সমাজ বিজ্ঞান",
    "quote" => "ইংরেজি ভাষাকে জুজু নয়, বরং নিয়মিত কথোপকথন ও ছড়ার মাধ্যমে আনন্দের সাথে শিক্ষার্থীদের শেখানো হয়।"
  ],
  [
    "name" => "মোছাঃ ফেরদৌসী আরা",
    "name_en" => "Mst. Ferdousi Ara",
    "designation" => "সহকারী শিক্ষক",
    "image" => "../images/teachers/ferdousi.jpg",
    "phone" => "+8801700-000004",
    "email" => "ferdousi.gps@gmail.com",
    "subject" => "ধর্ম ও নৈতিক শিক্ষা",
    "quote" => "আচরণগত পরিচ্ছন্নতা, শ্রদ্ধা এবং পারস্পরিক ভালোবাসা শিশুদের মধ্যে শৈশব থেকেই প্রতিষ্ঠিত করতে সচেষ্ট।"
  ],
  [
    "name" => "মোছাঃ আদিবা আফসানা",
    "name_en" => "Mst. Adiba Afsana",
    "designation" => "সহকারী শিক্ষক",
    "image" => "../images/teachers/adiba.jpg",
    "phone" => "+8801700-000005",
    "email" => "adiba.gps@gmail.com",
    "subject" => "প্রাক-প্রাথমিক ও চারুকলা",
    "quote" => "রং-তুলি, খেলাধুলা ও গানের মাধ্যমে ছোট সোনামণিদের বিদ্যালয়মুখী করা ও আনন্দের সাথে প্রাথমিক পাঠ দেওয়া।"
  ]
];
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">সম্মানিত শিক্ষক পরিষদ</span>
    <h1 class="display-5 fw-bold mb-2">আমাদের শিক্ষকবৃন্দ</h1>
    <p class="lead opacity-90 mb-0">মেধা, আন্তরিকতা ও স্নেহে প্রতিটি শিশুর ভবিষ্যৎ গড়ে তুলছেন আমাদের অভিজ্ঞ শিক্ষকগণ</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="section-head">
      <span class="section-eyebrow">আদর্শ শিক্ষকমণ্ডলী</span>
      <h2 class="section-title">শিক্ষক ও কর্মকর্তা পরিচিতি</h2>
      <p class="section-subtitle">
        একজন শিক্ষক শিক্ষার্থীর মেধা, নৈতিকতা ও চিন্তাশক্তি বিকাশে গুরুত্বপূর্ণ ভূমিকা পালন করেন। আমাদের নিবেদিতপ্রাণ শিক্ষকবৃন্দের তালিকা নিচে দেওয়া হলো:
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($teachers as $index => $t): ?>
      <div class="col-lg-4 col-md-6">
        <div class="teacher-card">
          <div class="teacher-img-wrap">
            <img src="<?php echo $t['image']; ?>" alt="<?php echo $t['name']; ?>" onerror="this.src='../images/logo.jpg'">
          </div>
          <div class="teacher-card-body">
            <span class="teacher-role-badge"><?php echo $t['designation']; ?></span>
            <h4 class="fw-bold mb-1"><?php echo $t['name']; ?></h4>
            <p class="text-muted small mb-2"><?php echo $t['name_en']; ?></p>
            <p class="small text-success fw-semibold mb-3">
              <i class="ti-bookmark me-1"></i> বিষয়: <?php echo $t['subject']; ?>
            </p>
            <p class="text-muted small fst-italic mb-3 px-2" style="line-height: 1.5;">
              "<?php echo $t['quote']; ?>"
            </p>
            <hr class="my-3 opacity-25">
            <div class="d-flex justify-content-center gap-2">
              <a href="tel:<?php echo $t['phone']; ?>" class="btn btn-sm btn-outline-success rounded-pill px-3">
                <i class="ti-mobile me-1"></i> কল করুন
              </a>
              <a href="mailto:<?php echo $t['email']; ?>" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="ti-email me-1"></i> ইমেইল
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
