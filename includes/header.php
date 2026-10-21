<?php
// Compute the application base path dynamically so the project works in any folder name.
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$base = rtrim(dirname($scriptName), '/');
$base = ($base === '' || $base === '.') ? '/' : $base . '/';
?>

<!-- Header -->
<header class="fixed-top header">
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-4 text-center text-lg-start">
                    <a class="text-color me-3" href="tel:+8801738618666">
                        <strong>CALL</strong> +88 01738-618666
                    </a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-end">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-uppercase p-sm-2 py-2 px-0 d-inline-block" href="<?php echo $base; ?>admin.php">admin</a></li>
                        <li class="list-inline-item"><a class="text-uppercase p-sm-2 py-2 px-0 d-inline-block" href="<?php echo $base; ?>notice.php">notice</a></li>
                        <li class="list-inline-item"><a class="text-uppercase p-sm-2 py-2 px-0 d-inline-block" href="<?php echo $base; ?>research.php">research</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base; ?>index.php">
                <img src="<?php echo $base; ?>images/logo.jpg" alt="Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php">হোম</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>about.php">এ্যাবাউট</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">অফিস</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo $base; ?>teachers.php">শিক্ষক</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base; ?>students.php">শিক্ষার্থী</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base; ?>files.php">ফাইলস</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>progress.php">প্রোগ্রেস</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>gallery.php">গ্যালারি</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>magazine.php">ম্যাগাজিন</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>comment-system/comment.php">কমেন্ট</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
