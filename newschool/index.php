<?php
$pageTitle = "হোম";
include 'includes/header.php';
?>

<!-- Live Breaking Notice Ticker -->
<div class="notice-ticker-bar">
  <div class="container">
    <div class="ticker-wrap">
      <span class="ticker-badge">
        <i class="ti-bell"></i> সর্বশেষ নোটিশ
      </span>
      <div class="ticker-track">
        <a href="notice.php" class="ticker-link">
          <i class="ti-arrow-circle-right"></i> বার্ষিক ক্রীড়া ও সাংস্কৃতিক প্রতিযোগিতা ২০২৬ এর সময়সূচি প্রকাশিত হয়েছে।
        </a>
        <a href="notice.php" class="ticker-link">
          <i class="ti-arrow-circle-right"></i> প্রাথমিক শিক্ষা সমাপনী প্রস্তুতিমূলক মডেল টেস্টের রুটিন দেখুন।
        </a>
        <a href="notice.php" class="ticker-link">
          <i class="ti-arrow-circle-right"></i> নতুন শিক্ষাবর্ষে সকল শ্রেণিতে বিনামূল্যে নতুন পাঠ্যবই বিতরণ সম্পন্ন হয়েছে।
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Hero Slider Section -->
<section class="hero-slider-section" aria-label="মূল ব্যানার">
  <div class="hero-slider-container">
    <!-- Slide 1 -->
    <div class="hero-slide active">
      <img src="../images/slider/school-1.jpg" alt="বিদ্যালয় প্রাঙ্গণ" class="hero-slide-bg">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <div class="hero-card">
          <span class="hero-tag">
            <i class="ti-star"></i> আদর্শ শিক্ষাঙ্গন
          </span>
          <h2 class="hero-title">অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়ে স্বাগতম</h2>
          <p class="hero-desc">
            একটি আলোকিত ও সৎ ভবিষ্যৎ প্রজন্মের সূতিকাগার। শিশুতোষ পাঠদান, নৈতিক শিক্ষা ও আধুনিক ডিজিটাল ক্লাসরুমের সমন্বয়ে আমরা তৈরি করছি আগামীর নেতৃত্ব।
          </p>
          <div class="hero-actions">
            <a href="about.php" class="btn-primary-custom">
              <i class="ti-arrow-right"></i> বিদ্যালয় সম্পর্কে জানুন
            </a>
            <a href="gallery.php" class="btn-outline-custom" style="border-color: rgba(255,255,255,0.6); color: #fff;">
              <i class="ti-image"></i> ফটো গ্যালারি
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide">
      <img src="../images/slider/school-2.jpg" alt="ডিজিটাল ক্লাসরুম" class="hero-slide-bg">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <div class="hero-card">
          <span class="hero-tag">
            <i class="ti-desktop"></i> স্মার্ট শিক্ষা
          </span>
          <h2 class="hero-title">তথ্যপ্রযুক্তির ব্যবহারে আধুনিক প্রাথমিক শিক্ষা</h2>
          <p class="hero-desc">
            শ্রেণিকক্ষে মাল্টিমিডিয়া প্রজেক্টর ও ইন্টারেক্টিভ কনটেন্টের মাধ্যমে শিশুদের মাঝে পড়ালেখাকে আনন্দদায়ক ও সহজবোধ্য করে তোলা হয়েছে।
          </p>
          <div class="hero-actions">
            <a href="progress.php" class="btn-accent-custom">
              <i class="ti-stats-up"></i> শিক্ষাগত সাফল্য দেখুন
            </a>
            <a href="files.php" class="btn-outline-custom" style="border-color: rgba(255,255,255,0.6); color: #fff;">
              <i class="ti-download"></i> সিলেবাস ডাউনলোড
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide">
      <img src="../images/slider/school-3.jpg" alt="সহশিক্ষা কার্যক্রম" class="hero-slide-bg">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <div class="hero-card">
          <span class="hero-tag">
            <i class="ti-medall"></i> সহশিক্ষা ও খেলাধুলা
          </span>
          <h2 class="hero-title">শারীরিক ও মানসিক বিকাশে খেলাধুলা ও সংস্কৃতি</h2>
          <p class="hero-desc">
            শুধু পাঠ্যপুস্তকের জ্ঞান নয়, শিশুদের শারীরিক বিকাশ ও সৃজনশীলতা জাগ্রত করতে আমাদের রয়েছে নিয়মিত ক্রীড়া ও সাংস্কৃতিক চর্চা।
          </p>
          <div class="hero-actions">
            <a href="teachers.php" class="btn-primary-custom">
              <i class="ti-user"></i> আমাদের শিক্ষকবৃন্দ
            </a>
            <a href="magazine.php" class="btn-outline-custom" style="border-color: rgba(255,255,255,0.6); color: #fff;">
              <i class="ti-book"></i> দেয়ালিকা ও পত্রিকা
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider Controls -->
  <div class="hero-slider-arrows">
    <button class="slider-arrow-btn" id="sliderPrevBtn" aria-label="পূর্ববর্তী স্লাইড">
      <i class="ti-angle-left"></i>
    </button>
    <button class="slider-arrow-btn" id="sliderNextBtn" aria-label="পরবর্তী স্লাইড">
      <i class="ti-angle-right"></i>
    </button>
  </div>

  <div class="hero-slider-nav">
    <button class="slider-dot active" aria-label="স্লাইড ১"></button>
    <button class="slider-dot" aria-label="স্লাইড ২"></button>
    <button class="slider-dot" aria-label="স্লাইড ৩"></button>
  </div>
</section>

<!-- Animated Metric Stats Strip -->
<div class="stats-strip">
  <div class="container">
    <div class="stats-card-grid">
      <!-- Stat 1 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap">
          <i class="ti-id-badge"></i>
        </div>
        <div class="stat-info">
          <div class="stat-value" data-target="245" data-suffix="+">০+</div>
          <div class="stat-label">বর্তমান শিক্ষার্থী</div>
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap">
          <i class="ti-user"></i>
        </div>
        <div class="stat-info">
          <div class="stat-value" data-target="6" data-suffix=" জন">০ জন</div>
          <div class="stat-label">দক্ষ শিক্ষক-শিক্ষিকা</div>
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap">
          <i class="ti-cup"></i>
        </div>
        <div class="stat-info">
          <div class="stat-value" data-target="100" data-suffix="%">০%</div>
          <div class="stat-label">বার্ষিক পাশের হার</div>
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap">
          <i class="ti-calendar"></i>
        </div>
        <div class="stat-info">
          <div class="stat-value" data-target="1993" data-suffix="">০</div>
          <div class="stat-label">কার্যক্রম শুরুর বছর</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Leadership Messages (UEO & Head Teacher) -->
<section class="section-padding">
  <div class="container">
    <div class="section-head">
      <span class="section-eyebrow">দিকনির্দেশনা ও বার্তা</span>
      <h2 class="section-title">সম্মানিত কর্মকর্তাদের বক্তব্য</h2>
      <p class="section-subtitle">বিদ্যালয়ের গুণগত শিক্ষা নিশ্চিতকরণে কর্মকর্তাদের মূল্যবান পরামর্শ ও অঙ্গীকার</p>
    </div>

    <div class="row g-4">
      <!-- UEO Card -->
      <div class="col-lg-6">
        <div class="message-card">
          <div class="leader-profile-row">
            <div class="leader-avatar-wrap">
              <img src="../images/principal/ueo.jpg" alt="মোঃ শহিদুল বারী খান (লিখন)">
            </div>
            <div class="leader-meta">
              <h4>মোঃ শহিদুল বারী খান (লিখন)</h4>
              <div class="leader-badge">উপজেলা প্রাথমিক শিক্ষা কর্মকর্তা (ভারপ্রাপ্ত)</div>
              <div class="date-stamp"><i class="ti-time"></i> ১০ জুলাই, ২০২৩</div>
            </div>
          </div>
          <div class="message-body">
            <p>
              আমি অত্যন্ত আনন্দিত যে, অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয় একটি ওয়েবসাইট চালু করেছে। এই ওয়েবসাইট আমাদের শিক্ষক, শিক্ষার্থী এবং অভিভাবকদের মধ্যে সংযোগ স্থাপনে গুরুত্বপূর্ণ ভূমিকা পালন করবে এবং বিদ্যালয়ের যাবতীয় তথ্য সহজে সরবরাহ করবে।
            </p>
            <p>
              আমাদের লক্ষ্য হল শিক্ষার্থীদের আধুনিক শিক্ষায় শিক্ষিত করে তোলা এবং তাদের ভবিষ্যৎ জীবনের জন্য প্রস্তুত করা। তথ্যের এই ডিজিটাল যুগে তাল মিলিয়ে চলতে না পারলে উন্নতি অসম্ভব। আমি সকল শিক্ষকদের প্রতি অনুরোধ জানাই—এই ওয়েবসাইটের আইসিটি কনটেন্টগুলো যেন শ্রেণিকক্ষে যথাযথভাবে প্রয়োগ হয়।
            </p>
          </div>
        </div>
      </div>

      <!-- Principal Card -->
      <div class="col-lg-6">
        <div class="message-card">
          <div class="leader-profile-row">
            <div class="leader-avatar-wrap">
              <img src="../images/principal/azaman.jpg" alt="মোঃ আমিরুজ্জামান">
            </div>
            <div class="leader-meta">
              <h4>মোঃ আমিরুজ্জামান</h4>
              <div class="leader-badge">প্রধান শিক্ষক (চ.দা.)</div>
              <div class="date-stamp"><i class="ti-time"></i> ১০ জুলাই, ২০২৩</div>
            </div>
          </div>
          <div class="message-body">
            <p>
              শুভেচ্ছা। অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়ের সকল শিক্ষক ও শুভানুধ্যায়ীদের প্রতি আহ্বান—ওয়েবসাইটে সংরক্ষিত শিক্ষা উপকরণগুলো যেন শ্রেণিকক্ষে পুরোপুরি ব্যবহৃত হয়। এই ওয়েবসাইট শুধু দেখার জন্য নয়, এটি পাঠদানের একটি শক্তিশালী হাতিয়ার।
            </p>
            <p>
              আমাদের মূল লক্ষ্য সার্টিফিকেটধারী শিক্ষিত মানুষ তৈরির চেয়ে একজন সৎ, নীতিবান ও দায়িত্বশীল নাগরিক তৈরি করা। এর জন্য সম্মানিত অভিভাবকদের সহযোগিতা একান্ত প্রয়োজন। আপনারা বিদ্যালয়ের সার্বিক অগ্রগতি জানতে এবং মূল্যবান পরামর্শ দিতে "মতামত" সেকশনটি ব্যবহার করতে পারেন।
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ICT in Primary Education Banner -->
<section class="section-padding-sm">
  <div class="container">
    <div class="ict-banner-card">
      <div class="ict-banner-text">
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">ডিজিটাল বাংলাদেশ ও স্মার্ট শিক্ষা</span>
        <h3>ICT in Primary Education</h3>
        <p>
          শ্রেণিকক্ষকে আনন্দময় ও ফলপ্রসূ করতে ডিজিটাল প্রেজেন্টেশন ও পাওয়ারপয়েন্ট কনটেন্ট সমৃদ্ধ পাঠদান। দেশের প্রাথমিক বিদ্যালয়ের যে কোনো শিক্ষক আমাদের প্রস্তুতকৃত কন্টেন্ট ব্যবহারে স্বাগতম।
        </p>
      </div>
      <div>
        <a href="files.php" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-success shadow">
          <i class="ti-download me-2"></i> ডিজিটাল কনটেন্ট সংগ্রহ করুন
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Recent Activities / News -->
<section class="section-padding">
  <div class="container">
    <div class="section-head">
      <span class="section-eyebrow">কার্যক্রম ও উদ্যোগ</span>
      <h2 class="section-title">সাম্প্রতিক কার্যক্রম</h2>
      <p class="section-subtitle">বিদ্যালয়ের শিক্ষার্থীদের সার্বিক সুরক্ষা ও উন্নয়নমূলক কর্মকাণ্ডের চিত্র</p>
    </div>

    <div class="row g-4">
      <!-- Activity 1 -->
      <div class="col-md-6">
        <div class="activity-card">
          <div class="activity-img-wrap">
            <img src="../images/activities/vaccin.jpg" alt="টাইফয়েড ভ্যাকসিনেশন ক্যাম্প">
            <span class="activity-tag">স্বাস্থ্য ও সুরক্ষা</span>
          </div>
          <div class="activity-body">
            <div class="activity-date"><i class="ti-calendar"></i> ১৪ অক্টোবর, ২০২৫</div>
            <h3 class="activity-title">টাইফয়েড ভ্যাকসিনেশন ক্যাম্পেইন সফলভাবে সম্পন্ন</h3>
            <p class="activity-desc">
              বিদ্যালয় কর্তৃপক্ষের বিশেষ উদ্যোগে প্রতিটি শিক্ষার্থীর জন্য 'টাইফয়েড ভ্যাকসিন' রেজিস্ট্রেশন এবং সুশৃঙ্খলভাবে টিকা প্রদান কার্যক্রম সম্পন্ন হয়। সংক্রামক রোগ প্রতিরোধে এটি শিশুদের স্বাস্থ্য সুরক্ষায় এক যুগান্তকারী পদক্ষেপ।
            </p>
            <a href="gallery.php" class="fw-bold text-success">
              বিস্তারিত ছবি দেখুন <i class="ti-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Activity 2 -->
      <div class="col-md-6">
        <div class="activity-card">
          <div class="activity-img-wrap">
            <img src="../images/activities/blood-test.jpg" alt="রক্তের গ্রুপ পরীক্ষা ক্যাম্প">
            <span class="activity-tag">স্বাস্থ্য ক্যাম্প</span>
          </div>
          <div class="activity-body">
            <div class="activity-date"><i class="ti-calendar"></i> ০৬ সেপ্টেম্বর, ২০২২</div>
            <h3 class="activity-title">সকল শিক্ষার্থীর রক্তের গ্রুপ পরীক্ষা কার্যক্রম</h3>
            <p class="activity-desc">
              স্বল্প খরচে দক্ষ স্বাস্থ্যকর্মীদের দ্বারা বিদ্যালয়ের প্রতিটি শিক্ষার্থীর রক্তের গ্রুপ নির্ণয় করা হয়। যাদের আরএইচ ফ্যাক্টর নেগেটিভ পাওয়া গেছে, তাদের অভিভাবকদের সচেতন করে বিশেষ নির্দেশনা প্রদান করা হয়েছে।
            </p>
            <a href="gallery.php" class="fw-bold text-success">
              বিস্তারিত ছবি দেখুন <i class="ti-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- School Features Grid -->
<section class="section-padding" style="background: var(--bg-surface-elevated);">
  <div class="container">
    <div class="section-head">
      <span class="section-eyebrow">কেন আমরা আলাদা?</span>
      <h2 class="section-title">বিদ্যালয়ের বিশেষ সুবিধাসমূহ</h2>
      <p class="section-subtitle">একটি আধুনিক প্রাথমিক বিদ্যালয়ের সকল মানসম্মত পরিবেশ ও সুযোগ-সুবিধা</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-book"></i></div>
          <h4>নৈতিক ও আদর্শ শিক্ষা</h4>
          <p>শুধু পুঁথিগত শিক্ষা নয়, শৈশব থেকেই শিশুদের মধ্যে সততা, পরোপকার ও সামাজিক মূল্যবোধ গড়ে তোলা হয়।</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-desktop"></i></div>
          <h4>মাল্টিমিডিয়া ক্লাসরুম</h4>
          <p>অডিও-ভিজুয়াল কনটেন্ট ও প্রোজেক্টরের মাধ্যমে প্রতিটি পাঠকে শিশুদের কাছে আকর্ষণীয়ভাবে উপস্থাপন করা হয়।</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-medall"></i></div>
          <h4>খেলাধুলা ও শারীরিক চর্চা</h4>
          <p>সুবিশাল খেলার মাঠ এবং ফুটবল, কাবাডিসহ বার্ষিক ক্রীড়া প্রতিযোগিতা আয়োজনের মাধ্যমে সুস্থ দেহ ও মনের বিকাশ।</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-heart"></i></div>
          <h4>বিনামূল্যে মিড-ডে মিল ও স্বাস্থ্যসেবা</h4>
          <p>নিয়মিত স্বাস্থ্য পরীক্ষা, রক্ত পরীক্ষা, কৃমিনাশক ও পুষ্টিকর খাবার পর্যবেক্ষণের সুব্যবস্থা রয়েছে।</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-palette"></i></div>
          <h4>শিল্পকলা ও সাংস্কৃতিক চর্চা</h4>
          <p>চিত্রাঙ্কন, সঙ্গীত, আবৃত্তি ও হস্তলিপির বিশেষ প্রশিক্ষণের মাধ্যমে শিশুদের সৃজনশীল মেধা জাগ্রত করা হয়।</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="feature-box">
          <div class="feature-icon"><i class="ti-comments"></i></div>
          <h4>অভিভাবক সম্মেলন</h4>
          <p>শিক্ষার্থীদের মানসিক ও পড়াশোনার অগ্রগতি নিয়ে নিয়মিত শিক্ষক-অভিভাবক বৈঠক ও পরামর্শ বিনিময় অনুষ্ঠিত হয়।</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Preview Strip -->
<section class="section-padding">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3">
      <div>
        <span class="section-eyebrow">ফটো অ্যালবাম</span>
        <h2 class="section-title mb-0">ক্যাম্পাস মুহূর্তসমূহ</h2>
      </div>
      <div>
        <a href="gallery.php" class="btn-outline-custom">
          সব ছবি দেখুন <i class="ti-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-md-3 col-6">
        <div class="gallery-card">
          <img src="../images/gallery/Foot Ball Team-22.jpg" alt="ফুটবল দল">
          <div class="gallery-overlay">
            <div>
              <h5>ফুটবল একাদশ</h5>
              <span>আন্তঃবিদ্যালয় ক্রীড়া প্রতিযোগিতা</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="gallery-card">
          <img src="../images/gallery/School-10 (2).jpg" alt="বিদ্যালয় প্রাঙ্গণ">
          <div class="gallery-overlay">
            <div>
              <h5>বিদ্যালয় ভবন</h5>
              <span>সুসজ্জিত ক্যাম্পাস ও মনোরম পরিবেশ</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="gallery-card">
          <img src="../images/gallery/xx1.jpg" alt="ক্রীড়া উৎসব">
          <div class="gallery-overlay">
            <div>
              <h5>বার্ষিক ক্রীড়া প্রতিযোগিতা</h5>
              <span>শিক্ষার্থীদের প্রাণবন্ত অংশগ্রহণ</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="gallery-card">
          <img src="../images/gallery/xx2.jpg" alt="সাংস্কৃতিক অনুষ্ঠান">
          <div class="gallery-overlay">
            <div>
              <h5>সাংস্কৃতিক অনুষ্ঠান</h5>
              <span>গান, কবিতা ও নাট্যাভিনয়</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
