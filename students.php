<?php

// যদি শুধু JSON ডেটা চাই
if(isset($_GET['mode']) && $_GET['mode']=="json"){
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($students, JSON_UNESCAPED_UNICODE);
  exit;
}
?>


<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="utf-8">
    <title>Students</title>

    <!-- Mobile Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
     
<section id="students-section" class="stu-section py-5">
  <div class="container">
    <div class="student-section-header text-center mb-5">
      <h2 class="section-title mb-3">আমাদের শিক্ষার্থীরা</h2>
        <p class="section-subtitle">এখানে আমাদের সকল শিক্ষার্থীর সাথে পরিচিত হতে পারেন। নিচে যে কোনো শিক্ষার্থীর ছবিতে ক্লিক করে
         দেখে নিতে পারেন তার সকল তথ্য। এসব তথ্য আমাদের শিক্ষার্থীদের উন্নয়ন এবং অগ্রগতির ব্যপারে আপনাকে সম্যক ধারণা দেবে।</p>
        <p>(এখানে অভিভাবকের দায়িত্ববোধ বলতে আমরা বুঝিয়েছি- তার শিশুর শিক্ষার বিষয়ে তার সচেতনতা) </p>
        <p class="text-dark">সর্বশেষ আপডেট: ১০ জুলাই, ২০২৩</p>
    </div>
    <!-- Pre-primary -->
    <h2 class="stu-class-title">প্রাক-প্রাথমিক</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/sinthia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সিনথিয়া জান্নাত" data-class="প্রাক-প্রাথমিক" data-roll="১" 
             data-father="আবু বকর" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="উদার" data-father-fin="মধ্যবিত্ত"
             data-attendance="১৩৩/১৩৪ (৯৯%)" 
             data-performance="ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ সিনথিয়া জান্নাত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/sadia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সাদিয়া আকতার" data-class="প্রাক-প্রাথমিক" data-roll="২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৯/১৩৪ (৮১%)" 
             data-performance="মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম,-,-,-"/>
        <p class="stu-name">মোছাঃ সাদিয়া আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ হুজাইফা" data-class="প্রাক-প্রাথমিক" data-roll="৩" 
             data-father="রফিকুল" data-father-edu="-------" 
             data-father-resp="------" data-father-fin="-------"
             data-attendance="অন্যত্র গমন" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোঃ হুজাইফা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/taskin.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ তাসকিন আহমেদ" data-class="প্রাক-প্রাথমিক" data-roll="৪" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৪/১৩৪ (৭৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, ভালো, ভালো, ভালো, মধ্যম, ভালো, ভালো,-,-,- " />
        <p class="stu-name">মোঃ তাসিন আহমেদ</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/sharthok.jpg" alt="Student" class="stu-thumb" 
             data-name="সার্থক রায়" data-class="প্রাক-প্রাথমিক" data-roll="৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৬/১৩৪ (৭২%)" 
             data-performance="খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ,খারাপ,-,-,- " />
        <p class="stu-name">সার্থক রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/himu roy.jpg" alt="Student" class="stu-thumb" 
             data-name=" হিমু রায় বন্ধন" data-class="প্রাক-প্রাথমিক" data-roll="৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৫/১৩৪ (৭১%)" 
             data-performance="ভালো, মধ্যম, ভালো, ভালো, মধ্যম, ভালো, ভালো, ভালো,ভালো,-,-,-" />
        <p class="stu-name"> হিমু রায় বন্ধন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/tuli.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রীমতি তুলি রানী" data-class="প্রাক-প্রাথমিক" data-roll="৭" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance=" ১০৯/১৩৪ (৮১%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,- " />
        <p class="stu-name">শ্রীমতি তুলি রানী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/ongkon.jpg" alt="Student" class="stu-thumb" 
             data-name="অংকন রায়" data-class="প্রাক-প্রাথমিক" data-roll="৮" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০২/১৩৪ (৭৬%)" 
             data-performance="ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো, ভালো,-,-,- " />
        <p class="stu-name">অংকন রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/abir.jpg" alt="Student" class="stu-thumb" 
             data-name="আবির হোসেন" data-class="প্রাক-প্রাথমিক" data-roll="৯" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৭/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">আবির হোসেন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/saiema.jpg" alt="Student" class="stu-thumb" 
             data-name=" সায়িমা আক্তার মালিহা" data-class="প্রাক-প্রাথমিক" data-roll="১০" 
             data-father="-------" data-father-edu="-------" 
             data-father-resp="------" data-father-fin="------"
             data-attendance=" ৯৯/১৩৪ (৭৫%)" 
             data-performance="মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো,-,-,-" />
        <p class="stu-name">সায়িমা আক্তার মালিহা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/mosaddika.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মোছাদ্দিকা" data-class="প্রাক-প্রাথমিক" data-roll="১১" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৯/১৩৪ (৮১%)" 
             data-performance="মধ্যম, ভালো, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ মোছাদ্দিকা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/bristi.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ কুলসুমা আকতার বৃস্টি" data-class="প্রাক-প্রাথমিক" data-roll="১২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৭৯/১৩৪ (৫৯%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, মধ্যম, ভালো, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ কুলসুমা আকতার বৃস্টি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/dipto.jpg" alt="Student" class="stu-thumb" 
             data-name="দিপ্ত রায়" data-class="প্রাক-প্রাথমিক" data-roll="১৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১১/১৩৪ (৮১%)" 
             data-performance="ভালো, মধ্যম, ভালো, ভালো, ভালো, ভালো,ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">দিপ্ত রায়</p>
      </div>
    </div>

    <!-- Class One -->
    <h2 class="stu-class-title">প্রথম শ্রেণি</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/tabssum.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ তাবাচ্ছুম" data-class="প্রথম শ্রেণি" data-roll="১" 
             data-father="জাহাঙ্গীর" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="উদার" data-father-fin="উচ্চবিত্ত"
             data-attendance="১২১/১৩৪ (৯০%)" 
             data-performance="মধ্যম, ভালো, ভালো, ভালো, ভালো, মধ্যম, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ তাবাচ্ছুম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/chadni.jpg" alt="Student" class="stu-thumb" 
             data-name="চাঁদনী রাণী মহন্ত" data-class="প্রথম শ্রেণি" data-roll="২" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৮/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">চাঁদনী রাণী মহন্ত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ এরফান আলী" data-class="প্রথম শ্রেণি" data-roll="৩" 
             data-father="--------" data-father-edu="-------" 
             data-father-resp="------" data-father-fin="------"
             data-attendance="অন্যত্র গমন" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোঃ এরফান আলী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/sumona.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সুমনা আকতার" data-class="প্রথম শ্রেণি"  data-roll="৪" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৬/১৩৪ (৭২%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ সুমনা আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/mishkatun jannat.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মিশকাতুন জান্নাত" data-class="প্রথম শ্রেণি" data-roll="৫" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ মিশকাতুন জান্নাত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/joyonto.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী জয়ন্ত মহন্ত" data-class="প্রথম শ্রেণি" data-roll="৬" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১১/১৩৪ (৮২%)" 
             data-performance="মধ্যম, মধ্যম, খারাপ, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী জয়ন্ত মহন্ত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/onurag.jpg" alt="Student" class="stu-thumb" 
             data-name="অনুরাগ দাস" data-class="প্রথম শ্রেণি" data-roll="৭" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১২/১৩৪ (৮৩%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">অনুরাগ দাস</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/prithi.jpg" alt="Student" class="stu-thumb" 
             data-name=" পৃথী রাণী" data-class="প্রথম শ্রেণি" data-roll="৮" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৪/১৩৪ (৭০%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, মধ্যম, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">পৃথী রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ সোহাইল মাহমুদ রোজ" data-class="প্রথম শ্রেণি" data-roll="৯" 
             data-father="------" data-father-edu="-------" 
             data-father-resp="-------" data-father-fin="-------"
             data-attendance="অন্যত্র গমন" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোঃ সোহাইল মাহমুদ রোজ</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ রায়িদ ইসলাম রোকন বাবু" data-class="প্রথম শ্রেণি" data-roll="১০" 
             data-father="শফিকুল" data-father-edu="-------" 
             data-father-resp="-------" data-father-fin="-------"
             data-attendance="অন্যত্র গমন" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোঃ রায়িদ ইসলাম রোকন বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/pranto.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী প্রান্ত রায়" data-class="প্রথম শ্রেণি" data-roll="১১" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৮/১৩৪ (৮০%)" 
             data-performance="খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, মধ্যম, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী প্রান্ত রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/nusrat.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ নুসরাত জাহান মনি" data-class="প্রথম শ্রেণি" data-roll="১২" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৮/১৩৪ (৮৮%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, মধ্যম, ভালো, মধ্যম, মধ্যম, ভালো,মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ নুসরাত জাহান মনি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="আনিশা আকতার নুসরাত" data-class="প্রথম শ্রেণি" data-roll="১৩" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৮/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">আনিশা আকতার নুসরাত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/hasan.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোঃ হাসান বাবু" data-class="প্রথম শ্রেণি" data-roll="১৪" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৬/১৩৪ (৭৯%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, ভালো, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোঃ হাসান বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মেশকাতুন জান্নাত মেরিন" data-class="প্রথম শ্রেণি" data-roll="১৫" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৭/১৩৪ (৮৭%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, মধ্যম, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ মেশকাতুন জান্নাত মেরিন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/shihab.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোঃ সিহাব বাবু" data-class="প্রথম শ্রেণি" data-roll="১৬" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৯/১৩৪ (৭৪%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোঃ সিহাব বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ জামিলা আকতার" data-class="প্রথম শ্রেণি" data-roll="১৭" 
             data-father="শফিকুল" data-father-edu="-------" 
             data-father-resp="------" data-father-fin="-------"
             data-attendance="অন্যত্র গমন " 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোছাঃ জামিলা আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মাহিম বাবু" data-class="প্রথম শ্রেণি" data-roll="১৮" 
             data-father="শফিকুল" data-father-edu="------" 
             data-father-resp="-----" data-father-fin="------"
             data-attendance="অন্যত্র গমন " 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মাহিম বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ সিয়াম " data-class="প্রথম শ্রেণি" data-roll="১৯" 
             data-father="শফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো,খারাপ,-,-,-" />
        <p class="stu-name">মোঃ সিয়াম </p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/one/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ আয়েশা সিদ্দিকা " data-class="প্রথম শ্রেণি" data-roll="২০" 
             data-father="----" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ আয়েশা সিদ্দিকা </p>
      </div>
    </div>

    <!-- Class Two -->
    <h2 class="stu-class-title">দ্বিতীয় শ্রেণি</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/ismahan.jpg" alt="Student" class="stu-thumb" 
             data-name="ইসমাহান বিনতে শাহিন" data-class="দ্বিতীয় শ্রেণি" data-roll="১" 
             data-father="আবু বকর" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="উদার" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৮/১৩৪ (৮৮%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, ভালো, মধ্যম, ভালো, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">ইসমাহান</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/opurbo chandra.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী অপুর্ব চন্দ্র রায়" data-class="দ্বিতীয় শ্রেণি" data-roll="২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১১/১৩৪ (৮২%)" 
             data-performance="খারাপ, মধ্যম, ভালো, ভালো, মধ্যম, ভালো, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">শ্রী অপুর্ব চন্দ্র রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/imon.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ ইমন" data-class="দ্বিতীয় শ্রেণি" data-roll="৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২১/১৩৪ (৯০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোঃ ইমন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="আমির হামজা" data-class="দ্বিতীয় শ্রেণি" data-roll="৪" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৭০/১৩৪ (৫২%)" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">আমির হামজা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/junaid.jpg" alt="Student" class="stu-thumb" 
             data-name="জুনাইদ হোসাইন" data-class="দ্বিতীয় শ্রেণি" data-roll="৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৬/১৩৪ (৭২%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, ভালো, মধ্যম, মধ্যম, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">জুনাইদ হোসাইন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/prithi.jpg" alt="Student" class="stu-thumb" 
             data-name="কুমারী পৃথী রানী রায়" data-class="দ্বিতীয় শ্রেণি" data-roll="৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৬/১৩৪ (৭৯%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">কুমারী পৃথী রানী রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/tamim.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ তামিম" data-class="দ্বিতীয় শ্রেণি" data-roll="৭" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০২/১৩৪ (৭৫%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোঃ তামিম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="সুব্রত রায়" data-class="দ্বিতীয় শ্রেণি" data-roll="৮" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৯/১৩৪ (৭৪%)" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">সুব্রত রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/sumaia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ উম্মে সুমাইয়া" data-class="দ্বিতীয় শ্রেণি" data-roll="৯" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৩/১৩৪ (৭৭%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো,মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ উম্মে সুমাইয়া</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/shibania.jpg" alt="Student" class="stu-thumb" 
             data-name="শিবানীয়া রাণী" data-class="দ্বিতীয় শ্রেণি" data-roll="১০" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৮/১৩৪ (৮০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">শিবানীয়া রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ উম্মে কুলসুম" data-class="দ্বিতীয় শ্রেণি" data-roll="১১" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৬৫/১৩৪ (৪৮%)" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">মোছাঃ উম্মে কুলসুম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/lamia.jpg" alt="Student" class="stu-thumb" 
             data-name="লামিয়া আক্তার" data-class="দ্বিতীয় শ্রেণি" data-roll="১২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৪/১৩৪ (৮৫%)" 
             data-performance="খারাপ, মধ্যম, ভালো, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">লামিয়া আক্তার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/sneha.jpg" alt="Student" class="stu-thumb" 
             data-name="স্নেহা রায় শ্রুতি" data-class="দ্বিতীয় শ্রেণি" data-roll="১৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৮/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম,-,-,-" />
        <p class="stu-name">স্নেহা রায় শ্রুতি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/riad.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ রিয়াদ" data-class="দ্বিতীয় শ্রেণি" data-roll="১৪" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৮/১৩৪ (৮০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">মোঃ রিয়াদ</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/mou.jpg" alt="Student" class="stu-thumb" 
             data-name="মৌ রাণী" data-class="দ্বিতীয় শ্রেণি" data-roll="১৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৮৭/১৩৪ (৬৫%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম,-,-,-" />
        <p class="stu-name">মৌ রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/khadija.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ খাদিজা আকতার" data-class="দ্বিতীয় শ্রেণি" data-roll="১৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৮/১৩৪ (৮০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ খাদিজা আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/opurbo hirok.jpg" alt="Student" class="stu-thumb" 
             data-name=" অপুর্ব হীরক" data-class="দ্বিতীয় শ্রেণি" data-roll="১৭" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৮/১৩৪ (৮০%)" 
             data-performance=" খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">অপুর্ব হীরক</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/hijbullah.jpg" alt="Student" class="stu-thumb" 
             data-name="মোয়াঃ হিজবুল্লাহ" data-class="দ্বিতীয় শ্রেণি" data-roll="১৮" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৫/১৩৪ (৭৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোয়াঃ হিজবুল্লাহ</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/maliha.jpg" alt="Student" class="stu-thumb" 
             data-name="মালিহা তাছমিম" data-class="দ্বিতীয় শ্রেণি" data-roll="১৯" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৬/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">মালিহা তাছমিম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="প্রিয়াংকা রানি" data-class="দ্বিতীয় শ্রেণি" data-roll="২০" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৬/১৩৪ (৭২%)" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">প্রিয়াংকা রানি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="অর্ণব রায় (R)" data-class="দ্বিতীয় শ্রেণি" data-roll="২১" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৬৫/১৩৪ (৪৮%)" 
             data-performance="-,-,-,-,-,-,-,-,-,-,-,-" />
        <p class="stu-name">অর্ণব রায় (R)</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/two/nishita.jpg" alt="Student" class="stu-thumb" 
             data-name="নিশীতা রাণী (R)" data-class="দ্বিতীয় শ্রেণি" data-roll="২২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৬১/১৩৪ (৪৫%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">নিশীতা রাণী (R)</p>
      </div>
    </div>

    <!-- Class Three -->
    <h2 class="stu-class-title">তৃতীয় শ্রেণি</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/lamia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ লামিয়া" data-class="তৃতীয় শ্রেণি" data-roll="১" 
             data-father="আবু বকর" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="উদার" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৭/১৩৪ (৯৪%)" 
             data-performance="মধ্যম, ভালো, ভালো, ভালো, মধ্যম, ভালো, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ লামিয়া</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/saiad.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ সায়াদ আলী" data-class="তৃতীয় শ্রেণি" data-roll="২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,- " />
        <p class="stu-name">মোঃ সায়াদ আলী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/tamanna.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ তামান্না আকতার" data-class="তৃতীয় শ্রেণি" data-roll="৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৩/১৩৪ (৭৭%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, খারাপ, খারাপ, খারাপ, মধ্যম, মধ্যম, মধ্যম,-,-,- " />
        <p class="stu-name">মোছাঃ তামান্না আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/joti.jpg" alt="Student" class="stu-thumb" 
             data-name="জ্যোতি রানী" data-class="তৃতীয় শ্রেণি" data-roll="৪" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৪/১৩৪ (৯২%)" 
             data-performance="মধ্যম, ভালো, ভালো, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,- " />
        <p class="stu-name">জ্যোতি রানী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/suraia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সুরাইয়া জান্নাত" data-class="তৃতীয় শ্রেণি" data-roll="৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৬/১৩৪ (৯৪%)" 
             data-performance="ভালো, মধ্যম, ভালো, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">মোছাঃ সুরাইয়া জান্নাত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/kulsuma.jpg" alt="Student" class="stu-thumb" 
             data-name="কুলসুমা আকতার নওরিন" data-class="তৃতীয় শ্রেণি" data-roll="৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৫/১৩৪ (৯৫%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,- " />
        <p class="stu-name">কুলসুমা আকতার নওরিন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/rimi.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ রিমী আক্তার" data-class="তৃতীয় শ্রেণি" data-roll="৭" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, মধ্যম, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">মোছাঃ রিমী আক্তার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/bishwash.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী বিশ্বাস রায়" data-class="তৃতীয় শ্রেণি" data-roll="৮" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৯৮/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">শ্রী বিশ্বাস রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/ohona.jpg" alt="Student" class="stu-thumb" 
             data-name=" অহনা রানী" data-class="তৃতীয় শ্রেণি" data-roll="৯" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৩/১৩৪ (৯২%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">অহনা রানী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ আরিফা বেগম" data-class="তৃতীয় শ্রেণি" data-roll="১০" 
             data-father="রফিকুল" data-father-edu="--------" 
             data-father-resp="মধ্যম" data-father-fin="--------"
             data-attendance="অন্যত্র গমন" 
             data-performance=" -, -, -, -, -, -, -, -, -,-,-,-" />
        <p class="stu-name">মোছাঃ আরিফা বেগম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/fariha.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ ফারিহা আকতার" data-class="তৃতীয় শ্রেণি" data-roll="১১" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ ফারিহা আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/rafiafariha.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ রাফিয়া ফারিহা" data-class="তৃতীয় শ্রেণি" data-roll="১২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০২/১৩৪ (৭৫%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">মোছাঃ রাফিয়া ফারিহা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/ummesumaia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ উম্মে সুমাইয়া" data-class="তৃতীয় শ্রেণি" data-roll="১৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৭/১৩৪ (৮৭%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, মধ্যম, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">মোছাঃ উম্মে সুমাইয়া</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="রিয়াদ ইসলাম রাফি বাবু" data-class="তৃতীয় শ্রেণি" data-roll="১৪" 
             data-father="রফিকুল" data-father-edu="-----" 
             data-father-resp="-----" data-father-fin=""
             data-attendance="অন্যত্র গমন" 
             data-performance="-, -, -, -, -, -, -, -, -, -, -, -" />
        <p class="stu-name">রিয়াদ ইসলাম রাফি বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/jit.jpg" alt="Student" class="stu-thumb" 
             data-name="জীত বাবু" data-class="তৃতীয় শ্রেণি" data-roll="১৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০১/১৩৪ (৭৫%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">জীত বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/ferdousi.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ ফেরদৌসী" data-class="তৃতীয় শ্রেণি" data-roll="১৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)"
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ,-,-,- " />
        <p class="stu-name">মোছাঃ ফেরদৌসী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/nirmoy.jpg" alt="Student" class="stu-thumb" 
             data-name="নির্ময় বাবু রায় নিহার" data-class="তৃতীয় শ্রেণি" data-roll="১৭" 
             data-father="----" data-father-edu="----" 
             data-father-resp="-----" data-father-fin="-----"
             data-attendance="অন্যত্র গমন" 
             data-performance="-, -, -, -, -, -, -, -, -, -, -, - " />
        <p class="stu-name">নির্ময় বাবু রায় নিহার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/rikta.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ রিক্তা মনি" data-class="তৃতীয় শ্রেণি" data-roll="১৮" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১৩০/১৩৪ (৯৭%)" 
             data-performance="খারাপ, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,- " />
        <p class="stu-name">মোছাঃ রিক্তা মনি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/three/sanjida.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সানজিতা" data-class="তৃতীয় শ্রেণি" data-roll="১৯" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১৩২/১৩৪ (৯৮%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ সানজিতা</p>
      </div>
    </div>

    <!-- Class Four -->
    <h2 class="stu-class-title">চতুর্থ শ্রেণী</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Mantasha.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মানতাশা" data-class="চতুর্থ শ্রেণি" data-roll="১" 
             data-father="মোঃ মইনুল ইসলাম" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="সচেতন" data-father-fin=" ছোট দোকান/মধ্যবিত্ত"
             data-attendance="১১৭/১৩৪ (৮৭%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, ভালো, ভালো, ভালো, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ মানতাশা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Gourob.jpg" alt="Student" class="stu-thumb" 
             data-name="গৌরব কুমার" data-class="চতুর্থ শ্রেণি" data-roll="২" 
             data-father="চঞ্চল কুমার" data-father-edu="এমএ" 
             data-father-resp="সচেতন" data-father-fin="পশু চিকিতসক/ মধ্যবিত্ত"
             data-attendance="১১৩/১৩৪ (৮৪%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, ভালো, ভালো, মধ্যম, ভালো, ভালো, ভালো,-,-,-" />
        <p class="stu-name">গৌরব কুমার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Bushra.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ বুশরা পারভীন" data-class="চতুর্থ শ্রেণি" data-roll="৩" 
             data-father="বাবু মিয়া" data-father-edu="পঞ্চম" 
             data-father-resp="মধ্যম" data-father-fin="নিম্নবিত্ত"
             data-attendance="১২৪/১৩৪ (৯২%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, মধ্যম, ভালো, ভালো, ভালো, ভালো, ভালো,-,-,- " />
        <p class="stu-name">মোছাঃ বুশরা পারভীন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Shafia.jpg" alt="Student" class="stu-thumb" 
             data-name=" সাফিয়া আকতার" data-class="চতুর্থ শ্রেণি" data-roll="৪" 
             data-father="সোহেল রানা" data-father-edu="-----" 
             data-father-resp="মধ্যম" data-father-fin="ফলের ব্যবসা/মধ্যবিত্ত"
             data-attendance="১০০/১৩৪ (৭৫%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো, ভালো,-,-,- " />
        <p class="stu-name">সাফিয়া আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Suraia.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সুরাইয়া পারভীন" data-class="চতুর্থ শ্রেণি" data-roll="৫" 
             data-father="মোঃ সেলিম হোসেন" data-father-edu="পঞ্চম" 
             data-father-resp="উত্তম" data-father-fin=" কৃষক/ নিম্ন মধ্যবিত্ত"
             data-attendance="১১৫/১৩৪ (৮৬%)" 
             data-performance="মধ্যম, ভালো, ভালো, ভালো, ভালো, ভালো, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ সুরাইয়া পারভীন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Maimuna.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মাইমুনা" data-class="চতুর্থ শ্রেণি" data-roll="৬" 
             data-father="মোঃ মহাসিন" data-father-edu="দ্বিতীয়" 
             data-father-resp="মধ্যম" data-father-fin="কৃষক/মধ্যবিত্ত"
             data-attendance="১২১/১৩৪ (৯০%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">মোছাঃ মাইমুনা</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Shultana.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সুলতানা পারভীন" data-class="চতুর্থ শ্রেণি" data-roll="৭" 
             data-father="মোঃ সাজু ইসলাম" data-father-edu="স---" 
             data-father-resp="অসচেতন" data-father-fin="শ্রমিক/নিম্ন মধ্যবিত্ত"
             data-attendance="১১৩/১৩৪ (৮৪%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম,-,-,- " />
        <p class="stu-name">মোছাঃ সুলতানা পারভীন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Bristi Rani .jpg" alt="Student" class="stu-thumb" 
             data-name=" বৃষ্টি রাণী" data-class="চতুর্থ শ্রেণি" data-roll="৮" 
             data-father="বাবু চন্দ্র মহন্ত" data-father-edu="----" 
             data-father-resp="মধ্যম" data-father-fin="স্বর্ণকার/মধ্যবিত্ত"
             data-attendance="১০৭/১৩৪ (৮০%)" 
             data-performance="মধ্যম, মধ্যম, ভালো, মধ্যম, মধ্যম, ভালো, মধ্যম, ভালো, ভালো,-,-,-" />
        <p class="stu-name">বৃষ্টি রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Likhon.jpg" alt="Student" class="stu-thumb" 
             data-name="লিখন রায় পার্থ " data-class="চতুর্থ শ্রেণি" data-roll="৯" 
             data-father="চঞ্চল রায়" data-father-edu="পঞ্চম" 
             data-father-resp="মধ্যম" data-father-fin="রাজমিস্ত্রি/ মধ্যবিত্ত"
             data-attendance="৯৭/১৩৪ (৭২%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, খারাপ, মধ্যম, ভালো, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">লিখন রায় পার্থ </p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Nondini.jpg" alt="Student" class="stu-thumb" 
             data-name="নন্দিনী রাণী" data-class="চতুর্থ শ্রেণি" data-roll="১০" 
             data-father="গৌতম কুমার" data-father-edu="এসএসসি" 
             data-father-resp="মধ্যম" data-father-fin="ব্যবসা/মধ্যবিত্ত"
             data-attendance="৯৮/১৩৪ (৭৩%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, মধ্যম, মধ্যম,-,-,-" />
        <p class="stu-name">নন্দিনী রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Bonna.jpg" alt="Student" class="stu-thumb" 
             data-name="বন্যা রণী" data-class="চতুর্থ শ্রেণি" data-roll="১১" 
             data-father="হেমন্ত চন্দ্র রায়" data-father-edu="সপ্তম শ্রেণি" 
             data-father-resp="অসচেতন" data-father-fin="নিম্নবিত্ত"
             data-attendance="১০১/১৩৪ (৭৫%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, খারাপ, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">বন্যা রণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Borsha Rani.jpg" alt="Student" class="stu-thumb" 
             data-name="বর্ষা রাণী" data-class="চতুর্থ শ্রেণি" data-roll="১২" 
             data-father="শ্রী বাসু দেব" data-father-edu="------" 
             data-father-resp="মধ্যম" data-father-fin="কৃষক/মধ্যবিত্ত" 
             data-attendance="১০৭/১৩৪ (৮০%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">বর্ষা রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Surjo.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী সুর্য বাবু" data-class="চতুর্থ শ্রেণি" data-roll="১৩" 
             data-father="শ্রী বিনয়" data-father-edu="------" 
             data-father-resp="মধ্যম" data-father-fin="ভ্যান চালক/নিম্ন মধ্যবিত্ত"
             data-attendance="৯৩/১৩৪ (৬৯%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী সুর্য বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/blank.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ ইনতিয়াজ বাবু সামিম" data-class="চতুর্থ শ্রেণি" data-roll="১৪" 
             data-father="---------" data-father-edu="-----" 
             data-father-resp="-----" data-father-fin="-----"
             data-attendance="অন্যত্র গমন" 
             data-performance="-, -, -, -, -, -, -, -, -, -, -, -" />
        <p class="stu-name">মোঃ ইনতিয়াজ বাবু সামিম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Sanjida.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সানজিদা আকতার" data-class="চতুর্থ শ্রেণি" data-roll="১৫" 
             data-father="মোঃহ মাজহারুল আলম" data-father-edu="পঞ্চম" 
             data-father-resp="মধ্যম" data-father-fin="ভ্যান চালক/ নিম্ন মধ্যবিত্ত"
             data-attendance="১১১/১৩৪ (৮৩%)" 
             data-performance="খারাপ, খারাপ, মধ্যম, খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ সানজিদা আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Rimjhim.jpg" alt="Student" class="stu-thumb" 
             data-name="রিমঝিম বৃষ্টি "  data-class="চতুর্থ শ্রেণি" data-roll="১৬" 
             data-father="মোঃ আনোয়ার" data-father-edu="পঞ্চম" 
             data-father-resp="মধ্যম" data-father-fin="ফ্যান চালক/ নিম্নমধ্যবিত্ত"
             data-attendance="৯৫/১৩৪ (৭১%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">রিমঝিম বৃষ্টি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Meghla.jpg" alt="Student" class="stu-thumb" 
             data-name="মেঘলা রায় মৌসুমী" data-class="চতুর্থ শ্রেণি" data-roll="১৭" 
             data-father="মদন রায়" data-father-edu="------" 
             data-father-resp="মধ্যম" data-father-fin="ভ্যান চালক/মধ্যবিত্ত"
             data-attendance="১০৫/১৩৪ (৭৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মেঘলা রায় মৌসুমী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Shopno.jpg" alt="Student" class="stu-thumb" 
             data-name="স্বপ্ন চন্দ্র মহন্ত" data-class="চতুর্থ শ্রেণি" data-roll="১৮" 
             data-father="সুশিল চন্দ্র মহন্ত" data-father-edu="তৃতীয়" 
             data-father-resp="মধ্যম" data-father-fin="সেলসম্যান/ নিম্ন মধ্যবিত্ত"
             data-attendance="৭৪/১৩৪ (৫৫%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম,-,-,-" />
        <p class="stu-name">স্বপ্ন চন্দ্র মহন্ত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Korno.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী কর্ণ বর্শন" data-class="চতুর্থ শ্রেণি" data-roll="১৯" 
             data-father="বিষ্ট চন্দ্র রায়" data-father-edu="------" 
             data-father-resp="মধ্যম" data-father-fin="ভ্যান চালক/নিম্নম ধ্যবিত্ত"
             data-attendance="৮৮/১৩৪ (৬৫%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী কর্ণ বর্শন</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Shetu.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোছাঃ সেতু মনি" data-class="চতুর্থ শ্রেণি" data-roll="২০" 
             data-father="সাহিবুর রহমান" data-father-edu="------" 
             data-father-resp="মধ্যম" data-father-fin="ট্রাক চালক/মধ্যবিত্ত"
             data-attendance="৮৩/১৩৪ (৬১%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ সেতু মনি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Raj Babu.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী রাজ বাবু" data-class="চতুর্থ শ্রেণি" data-roll="২১" 
             data-father="পরিতোষ রায়" data-father-edu="-----" 
             data-father-resp="মধ্যম" data-father-fin="রাজমিস্ত্রি/ মধ্যবিত্ত"
             data-attendance="৯৩/১৩৪ (৬৯%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী রাজ বাবু</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Munisha.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ মুনিশা তাবাসসুম" data-class="চতুর্থ শ্রেণি" data-roll="২২" 
             data-father="মামুন ইসলাম" data-father-edu="এসএসসি" 
             data-father-resp="মধ্যম" data-father-fin="কাঁচমালেরে ব্যবসা/নিম্ন মধ্যবিত্ত"
             data-attendance="৯৯/১৩৪ (৭৪%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, মধ্যম, মধ্যম,-,-,-" />
        <p class="stu-name">মোছাঃ মুনিশা তাবাসসুম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Bishal.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী বিশাল রায়" data-class="চতুর্থ শ্রেণি" data-roll="২৩" 
             data-father="বিপুল চন্দ্র রায়" data-father-edu="বিএ" 
             data-father-resp="অসচেতন" data-father-fin="বালু সরবরাহ/নিম্ন মধ্যবিত্ত"
             data-attendance="৯১/১৩৪ (৬৮%)" 
             data-performance="খারাপ, মধ্যম, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী বিশাল রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Prema.jpg" alt="Student" class="stu-thumb" 
             data-name="প্রেমা রাণী" data-class="চতুর্থ শ্রেণি" data-roll="২৪" 
             data-father="নাদিম মহন্ত" data-father-edu="-----" 
             data-father-resp="মধ্যম" data-father-fin="কাঁচমালের ব্যবসা/নিম্ন মধ্যবিত্ত"
             data-attendance="৬৮/১৩৪ (৫০%)"
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">প্রেমা রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Tamim.jpg" alt="Student" class="stu-thumb" 
             data-name="তাহসির হাছান তামিম" data-class="চতুর্থ শ্রেণি" data-roll="২৫" 
             data-father="শাহাজান আলী" data-father-edu="কওমি" 
             data-father-resp="অসচেতন" data-father-fin="কৃষক/নিম্ন মধ্যবিত্ত"
             data-attendance="৬৮/১৩৪ (৫০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">তাহসির হাছান তামিম</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Joni.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী জনি চন্দ্র রায়" data-class="চতুর্থ শ্রেণি" data-roll="২৬" 
             data-father="বিমল চন্দ্র রায়" data-father-edu="-----" 
             data-father-resp="মধ্যম" data-father-fin="পানের দোকান/মধ্যবিত্ত"
             data-attendance="৫৭/১৩৪ (৪২%)" 
             data-performance="খারাপ, খারাপ, খারাপ, খারাপ, মধ্যম, খারাপ, খারাপ, খারাপ, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী জনি চন্দ্র রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/four/Alfi Arshi.jpg" alt="Student" class="stu-thumb" 
             data-name=" আলফি আকতার আরশি" data-class="চতুর্থ শ্রেণি" data-roll="২৭" 
             data-father=" আব্দুল মজিদ সুজন" data-father-edu="----" 
             data-father-resp="মধ্যম" data-father-fin="কৃষক/মধ্যবিত্ত"
             data-attendance="৮৭/১৩৪ (৬৫%)" 
             data-performance="খারাপ, মধ্যম, মধ্যম, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, মধ্যম,-,-,-" />
        <p class="stu-name">আলফি আকতার আরশি</p>
      </div>
    </div>

    <!-- Class Five -->
    <h2 class="stu-class-title">পঞ্চম শ্রেণি</h2>
    <div class="row stu-gallery">
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/1.jpg" alt="Student" class="stu-thumb" 
             data-name="ঋত্তিকা রাহী" data-class="পঞ্চম শ্রেণি" data-roll="১" 
             data-father="আবু বকর" data-father-edu="উচ্চমাধ্যমিক" 
             data-father-resp="উদার" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৬/১৩৪ (৯৪%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">ঋত্তিকা রাহী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ রাকিবুল হাসান" data-class="পঞ্চম শ্রেণি" data-roll="২" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২২/১৩৪ (৯১%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোঃ রাকিবুল হাসান</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ সায়িদা আক্তার" data-class="পঞ্চম শ্রেণি" data-roll="৩" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৩/১৩৪ (৯১%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ সায়িদা আক্তার</p>
      </div>
      <div class="col-6 col-md-3 stu-card"> 
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ আলমনি" data-class="পঞ্চম শ্রেণি" data-roll="৪" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৮/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ আলমনি</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" অর্পন মহন্ত" data-class="পঞ্চম শ্রেণি" data-roll="৫" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="অন্যত্র গমন" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">অর্পন মহন্ত</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="মোছাঃ আশমানী" data-class="পঞ্চম শ্রেণি" data-roll="৬" 
             data-father="রফিকুল" data-father-edu="স্নাতক" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৫/১৩৪ (৯৩%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ আশমানী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোছাঃ লামিয়া আকতার" data-class="পঞ্চম শ্রেণি" data-roll="৭" 
             data-father="রফিকুল" data-mother="রেহেনা" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১০/১৩৪ (৮২%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ লামিয়া আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" কনা রানী" data-class="পঞ্চম শ্রেণি" data-roll="৮" 
             data-father="রফিকুল" data-mother="রেহেনা"  
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১২৪/১৩৪ (৯২%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">কনা রানী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোছাঃ মাহী আকতার" data-class="পঞ্চম শ্রেণি" data-roll="৯" 
             data-father="রফিকুল" data-mother="রেহেনা" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৭/১৩৪ (৮৭%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোছাঃ মাহী আকতার</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" শ্রী আকাশ" data-class="পঞ্চম শ্রেণি" data-roll="১০" 
             data-father="রফিকুল" data-mother="রেহেনা"  
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৩/১৩৪ (৭৬%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী আকাশ</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" দ্বিপ শিখা রাণী" data-class="পঞ্চম শ্রেণি" data-roll="১১" 
             data-father="রফিকুল" data-mother="রেহেনা"  
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১৯/১৩৪ (৮৮%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">দ্বিপ শিখা রাণী</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" আহনাফ আল আদীল" data-class="পঞ্চম শ্রেণি" data-roll="১২" 
             data-father="রফিকুল" data-mother="রেহেনা" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১০৪/১৩৪ (৭৬%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">আহনাফ আল আদীল</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="মোঃ আরাফাত রহমান" data-class="পঞ্চম শ্রেণি" data-roll="১৩" 
             data-father="রাজিব" data-mother="রেহেনা" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="১১২/১৩৪ (৮৩%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোঃ আরাফাত রহমান</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name="শ্রী বিক্রম রায়" data-class="পঞ্চম শ্রেণি" data-roll="১৪" 
             data-father="রাজিব" data-mother="রেহেনা" 
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৬৮/১৩৪ (৫০%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">শ্রী বিক্রম রায়</p>
      </div>
      <div class="col-6 col-md-3 stu-card">
        <img src="images/students/pre-primary/2.jpg" alt="Student" class="stu-thumb" 
             data-name=" মোর্শেদা আকতার মিতু" data-class="পঞ্চম শ্রেণি" data-roll="১৫" 
             data-father="রাজিব" data-mother="রেহেনা"  
             data-father-resp="মধ্যম" data-father-fin="মধ্যবিত্ত"
             data-attendance="৭০/১৩৪ (৫২%)" 
             data-performance="খারাপ, মধ্যম, ভালো, খারাপ, মধ্যম, মধ্যম, মধ্যম, ভালো, খারাপ,-,-,-" />
        <p class="stu-name">মোর্শেদা আকতার মিতু</p>
      </div>
    </div>
  </div>

  <!-- Fullscreen Modal with Next/Prev -->
 <!-- Fullscreen Modal -->
<div id="stu-modal" class="stu-modal">
  <div class="stu-modal-content">
    <span class="stu-close">&times;</span>

    <div class="d-flex flex-column flex-md-row">
      <!-- Left side photo -->
      <div class="stu-modal-photo col-md-6">
        <img id="stu-modal-img" src="" alt="Student" class="img-fluid">
      </div>

      <!-- Right side info -->
      <div class="stu-modal-info col-md-6">
        <h3 id="stu-modal-name"></h3>
        <p><strong>শ্রেণি:</strong> <span id="stu-modal-class"></span></p>
        <p><strong>রোল:</strong> <span id="stu-modal-roll"></span></p>
        <p><strong>পিতা:</strong> <span id="stu-modal-father"></span></p>
        <p><strong>মাতা:</strong> <span id="stu-modal-mother"></span></p>
        <p><strong>Responsibility:</strong> <span id="stu-modal-guardian-resp"></span></p>
        <p><strong>Financial condition:</strong> <span id="stu-modal-father-fin"></span></p>
        <p><strong>উপস্থিতি:</strong> <span id="stu-modal-attendance"></span></p>
        <p>
          <strong>পারফরম্যান্স:</strong> 
          <span id="stu-modal-performance"></span> 
          <span id="stu-modal-performance-arrow"></span>
        </p>
      </div>
    </div>
  </div>
</div>

</section>

<!-- বাকি Modal-গুলো একইভাবে s3 থেকে s8 পর্যন্ত কপি করো -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="js/students.js"></script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
