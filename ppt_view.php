<?php

$baseDir = "ppt"; // মূল ফোল্ডার

$class = $_GET['class'] ?? '';
$subject = $_GET['subject'] ?? '';

$classDir = $baseDir . "/" . $class;

// ক্লাস ফোল্ডার আছে কিনা চেক
if (!$class || !is_dir($classDir)) {
    die("❌ Class folder not found!");
}

// ক্লাস নাম সুন্দর করা
$classTitle = ucfirst(str_replace("class", "Class ", $class));

// রঙ সেট
$classColors = [
    "class1" => "primary",
    "class2" => "success",
    "class3" => "warning",
    "class4" => "danger",
    "class5" => "info"
];
$color = $classColors[$class] ?? "secondary";
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title><?php echo $classTitle; ?> Contents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <style>
        body { background-color: #f8f9fa; }
        .card-hover:hover { transform: scale(1.03); transition: 0.3s; }
        .file-icon { font-size: 2rem; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <!-- Preloader Start -->

<div class="preloader">
    <img src="<?php echo $base; ?>images/book-1.gif" alt="preloader">
</div>

<!-- Preloader End -->
<div class="container py-4">

    <!-- ক্লাস হেডার -->
    <div class="card bg-<?php echo $color; ?> text-white mb-4">
        <div class="card-body text-center">
            <h2><?php echo $classTitle; ?> – ICT Contents</h2>
            <p>এখানে <?php echo $classTitle; ?> এর জন্য কন্টেন্ট সাজানো রয়েছে।</p>
        </div>
    </div>

    <?php if (!$subject): ?>
        <!-- সাবজেক্ট লিস্ট -->
        <h4 class="mb-3">📘 Subjects</h4>
        <div class="row">
            <?php
            $subjects = array_filter(glob($classDir . "/*"), 'is_dir');
            foreach ($subjects as $subDir):
                $subName = basename($subDir);
                $link = "ppt_view.php?class=$class&subject=" . urlencode($subName);
            ?>
            <div class="col-md-4 mb-3">
                <div class="card card-hover shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="file-icon mb-2">📂</div>
                        <h5 class="card-title"><?php echo $subName; ?></h5>
                        <a href="<?php echo $link; ?>" class="btn btn-outline-<?php echo $color; ?>">Open</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    <?php else: ?>
        <!-- ফাইল লিস্ট -->
        <h4 class="mb-3">📂 <?php echo $subject; ?> Files</h4>
        <div class="row">
        <?php
        $subjectDir = $classDir . "/" . $subject;
        if (!is_dir($subjectDir)) {
            echo "<p class='alert alert-danger'>❌ Subject folder not found!</p>";
        } else {
            $files = array_diff(scandir($subjectDir), ['.', '..']);
            if (count($files) > 0) {
                foreach ($files as $file) {
                    $path = $subjectDir . "/" . $file;
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                    $icon = "📄"; $btnClass = "secondary"; $viewBtn = "";
                    if ($ext == "pptx") { $icon = "📊"; $btnClass = "primary"; }
                    elseif ($ext == "pdf") { $icon = "📑"; $btnClass = "success"; 
                        $viewBtn = "<a href='$path' target='_blank' class='btn btn-sm btn-outline-success me-2'>View</a>";
                    }
        ?>
            <div class="col-md-4 mb-3">
                <div class="card card-hover shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="file-icon mb-2"><?php echo $icon; ?></div>
                        <h6 class="card-title"><?php echo $file; ?></h6>
                        <div class="mt-2">
                            <?php echo $viewBtn; ?>
                            <a href="<?php echo $path; ?>" download class="btn btn-sm btn-outline-<?php echo $btnClass; ?>">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                }
            } else {
                echo "<p class='alert alert-warning'>❗ No files found in this subject.</p>";
            }
        }
        ?>
        </div>

        <div class="mt-3">
            <a href="ppt_view.php?class=<?php echo $class; ?>" class="btn btn-secondary">⬅ Back to Subjects</a>
        </div>
    <?php endif; ?>

    <div class="mt-4 text-center">
        <a href="powerpoint.php" class="btn btn-dark">⬅ Back to Class List</a>
    </div>
</div>



<!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Venobox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.6/venobox.min.js"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
