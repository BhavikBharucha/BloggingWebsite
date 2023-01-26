<?php
include '../config/connection.php';
?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo-2.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ======== preloader start ======== -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo/logo-2.svg" alt="Logo" style="height:100px;" />
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#blogs">Blogs</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#why">Ask Doubts</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#ourteam">Our Team</a>
                                    </li>

                                    <li class="nav-item">
                                        <?php
                                        if (isset($_SESSION['loginstatus'])) {
                                            $loginstatus = $_SESSION['loginstatus'];
                                        ?>
                                            <a style="color:black;"><?php echo $loginstatus; ?></a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="../login-register/login.php">Login</a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Welcome! To Blogging Site
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Here you can create your own blogs, and read others blogs!<br>
                        <h3 style="color:white;margin-top:0;padding-top:0;"> One solution to all your problems!</h3>
                        </p>
                        <form method="post">
                            <?php
                            if (isset($_SESSION['loginstatus'])) {
                            ?>
                                <button name="logout" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Logout</button>
                            <?php
                            } else {
                            ?>
                                <a href="../login-register/login.php" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Log in and Get Started</a>
                            <?php
                            }

                            ?>
                        </form>
                        <a href="#features" class="scroll-bottom">
                            <i class="lni lni-arrow-down"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/img/crouselimage.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="features" class="feature-section pt-120">
        <div class="container">

            <center>
                <h1>Features</h1>
            </center>
            <hr style="height: 12px; color: #0d6efd; border-radius: 5px;" />
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa-brands fa-blogger-b"></i>
                        </div>
                        <div class="content">
                            <h3>Blogs</h3>
                            <p>
                                Here you can read blogs,articles and can also write your own blogs,articles
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h3>Types of blogs</h3>
                            <p>
                                You can create various types of bloggs in different categories
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa-solid fa-book"></i>
                        </div>
                        <div class="content">
                            <h3>Study Material</h3>
                            <p>
                                The students can get their study material of any semester to study properly
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== about-section start ======== -->
    <section id="blogs">
        <section id="about blogs" class="about-section pt-150">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/about/about1.svg" alt="" class="w-100" />
                            <img src="assets/img/about/about-left-shape.svg" alt="" class="shape shape-1" />
                            <img src="assets/img/about/left-dots.svg" alt="" class="shape shape-2" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-30">
                                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                                    Write Your own Blogs and Articles
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    Student portal of BMIIT provieds you a plat form to write your own blogs and articles,
                                    you can also read blogs of your interest here,Grab this opportunity!
                                </p>
                            </div>
                            <?php
                            if (isset($_SESSION['loginstatus'])) {
                            ?>
                                <a href="../blog-index.php" class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s">Discover More</a>
                            <?php
                            } else {
                            ?>
                                <a href="../login-register/login.php" class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s">Discover More</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- ======== about-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="why" class="feature-extended-section pt-100">
        <div class="feature-extended-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
                        <div class="section-title text-center mb-60">
                            <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                                Create Your First Blog
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Here you can solve your doubts,No student will now go to sleep with a doubt in their mind.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h3>Registration and Login</h3>
                                <p>
                                    After Registering your self, login into the system.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h3>Write blogs</h3>
                                <p>
                                    After selection of category, write your own blogs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h3>Publish your blog</h3>
                                <p>
                                    After writing your blog, publish the blogs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="btn" style="width:50%vw;">
                        <a href="../askdoubt.php" class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s">Sign-in</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== our-team start ======== -->
    <section id="ourteam" class="feature-section pt-120">
        <div class="container">
            <center>
                <h1>Our Team</h1>
            </center>
            <hr style="height: 12px; color: #0d6efd; border-radius: 5px;" />
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Bhavik Bharucha</h3>
                            <p>
                                Tech Lead
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Jay Dave</h3>
                            <p>
                                Developer
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Harshal Balar</h3>
                            <p>
                                Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Bhakti Patel</h3>
                            <p>
                                The students can get their study material of any semester to study properly
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== our-team end ======== -->

    <!-- ======== footer start ======== -->
    <footer class="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-30">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.svg" alt="" style="height:100px;" />
                                </a>
                            </div>
                            <p class="desc mb-30 text-white">
                                One solution to all your problems
                            </p>
                            <ul class="socials">
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <ul class="links">
                                <li><a class="page-scroll" href="#home">Home</a></li>
                                <li><a class="page-scroll" href="#features">Feature</a></li>
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Features</h3>
                            <ul class="links">
                                <li><a class="page-scroll" href="#why">How it works</a></li>
                                <li><a href="javascript:void(0)">Privacy policy</a></li>
                                <li><a href="javascript:void(0)">Terms of service</a></li>
                                <li><a href="javascript:void(0)">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Other Official Webportals</h3>
                            <ul class="links">
                                <li><a href="http://utu.ac.in/bmiit/#/">BMIIT Official Website</a></li>
                                <li><a href="http://utu.ac.in/bmiit/CHRONICLES/#/">BMIIT Magazine</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>