<?php
// Active page detection
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle . " | " : ""; ?>অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়, ফুলবাড়ী, দিনাজপুর। আলোকিত ভবিষ্যৎ গড়ার নির্ভরযোগ্য বিদ্যাপীঠ।">
  <meta name="keywords" content="অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়, প্রাথমিক বিদ্যালয়, ফুলবাড়ী, দিনাজপুর, প্রাইমারি স্কুল">
  <meta name="author" content="Amrobari Govt. Primary School">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

  <!-- Google Fonts: Hind Siliguri (Bangla) + Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS Grid & Utilities -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Themify Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">

  <!-- Custom Modern Design System -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Smart Header (Top Bar + Glass Navbar) -->
  <header class="smart-header" id="mainSmartHeader">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="top-bar-inner">
          <div class="top-bar-left">
            <span class="top-item">
              <i class="ti-location-pin"></i> অম্রবাড়ী, ফুলবাড়ী, দিনাজপুর
            </span>
            <span class="top-badge">স্থাপিত: ১৯৯৩ (কাগজপত্রে ১৯৮৯)</span>
          </div>

          <div class="top-bar-right">
            <a href="tel:+8801738618666" class="top-item">
              <i class="ti-headphone-alt"></i> ০১৭৩৮-৬১৮৬৬৬
            </a>
            <a href="mailto:amrobari.gps@gmail.com" class="top-item">
              <i class="ti-email"></i> amrobari.gps@gmail.com
            </a>
            <a href="notice.php" class="top-item">
              <i class="ti-bell"></i> নোটিশ
            </a>
            <a href="research.php" class="top-item">
              <i class="ti-light-bulb"></i> রিসার্চ
            </a>

            <!-- Dark / Light Theme Toggle -->
            <button type="button" class="theme-toggle-btn" id="themeToggleBtn" title="থিম পরিবর্তন করুন" aria-label="থিম পরিবর্তন">
              <i class="ti-shine"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="main-navbar" aria-label="প্রধান নেভিগেশন">
      <div class="container">
        <div class="nav-container">
          <!-- School Brand / Logo -->
          <a href="index.php" class="school-brand">
            <div class="brand-logo-wrap">
              <img src="../images/logo.jpg" alt="বিদ্যালয়ের লোগো">
            </div>
            <div class="brand-text">
              <h1>অম্রবাড়ী সরকারি প্রাথমিক বিদ্যালয়</h1>
              <p>Amrobari Govt. Primary School, Fulbari</p>
            </div>
          </a>

          <!-- Mobile Toggle Button -->
          <button class="mobile-nav-toggle" aria-label="মেনু খুলুন">
            <i class="ti-menu"></i>
          </button>

          <!-- Nav Menu List -->
          <ul class="nav-menu">
            <li>
              <a href="index.php" class="nav-link-custom <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                <i class="ti-home"></i> হোম
              </a>
            </li>
            <li>
              <a href="about.php" class="nav-link-custom <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                <i class="ti-info-alt"></i> বিদ্যালয় পরিচিতি
              </a>
            </li>
            
            <!-- Dropdown: অফিস -->
            <li class="nav-dropdown">
              <a href="#" class="nav-link-custom dropdown-trigger <?php echo in_array($currentPage, ['teachers.php', 'students.php', 'files.php']) ? 'active' : ''; ?>">
                <i class="ti-briefcase"></i> অফিস
              </a>
              <ul class="dropdown-content">
                <li>
                  <a href="teachers.php" class="dropdown-item-custom">
                    <i class="ti-user"></i> শিক্ষকবৃন্দ
                  </a>
                </li>
                <li>
                  <a href="students.php" class="dropdown-item-custom">
                    <i class="ti-id-badge"></i> শিক্ষার্থী তথ্য
                  </a>
                </li>
                <li>
                  <a href="files.php" class="dropdown-item-custom">
                    <i class="ti-download"></i> প্রয়োজনীয় ফাইল ও সিলেবাস
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a href="progress.php" class="nav-link-custom <?php echo ($currentPage == 'progress.php') ? 'active' : ''; ?>">
                <i class="ti-stats-up"></i> অগ্রগতি ও ফলাফল
              </a>
            </li>
            <li>
              <a href="gallery.php" class="nav-link-custom <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>">
                <i class="ti-gallery"></i> গ্যালারি
              </a>
            </li>
            <li>
              <a href="magazine.php" class="nav-link-custom <?php echo ($currentPage == 'magazine.php') ? 'active' : ''; ?>">
                <i class="ti-book"></i> ম্যাগাজিন
              </a>
            </li>
            <li>
              <a href="contact.php" class="nav-link-custom <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                <i class="ti-comments"></i> মতামত
              </a>
            </li>
            <li>
              <a href="notice.php" class="btn-cta-nav">
                <i class="ti-announcement"></i> জরুরি নোটিশ
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
