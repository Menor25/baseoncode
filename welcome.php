
<?php ob_start(); ?>
<?php 
    session_start();
    include "private/autoload.php";  

    $Error = "";
?>
<?php
    $payerId = $_GET['i'];
    //echo $payerId . "<br>";
    
    $decode_id = base64_decode(urldecode($payerId));

    if(empty($decode_id)){
        header('Location: course');
    }
    //echo    $decode_id;
    $paymentSuccess = getPaymentDetails($decode_id);

    foreach($paymentSuccess as $success){
        $payment_message = $success['payment_message'];
        $ref_number = $success['ref_number'];
        $amount = $success['amount'];

    }
    
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BaseOnCode - Building The Next Tech. Nation</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <div id="page" class="section">
        <!-- Header Section Start -->
        <div class="header-section header-fluid sticky-header section">
            <div class="header-inner">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-3 col-auto">
                            <div class="header-logo">
                                <a href="home">
                                    <img class="dark-logo" src="assets/images/logo/baseoncode.JPEG" alt="Learts Logo">
                                    <img class="light-logo" src="assets/images/logo/baseoncode.JPEG" alt="Learts Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Main Menu Start -->
                        <!-- <div class="col d-none d-xl-block position-static" style="float: right;">
                            <nav class="site-main-menu">
                                <ul>
                                    <li class="position-static">
                                        <a href="home"><span class="menu-text">Home</span></a>
                                    </li>
                                    <li class="position-static">
                                        <a href="#"><span class="menu-text">About Us</span></a>
                                        
                                    </li>
                                    <li class="position-static">
                                        <a href="#"><span class="menu-text">Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                        <!-- Header Main Menu End -->

                        <!-- Header Right Start -->
                        <div class="col-xl-6 col-auto">
                            <div class="header-right">
                                <div class="inner">
                        <!-- Header Main Menu Start -->
                        <div class="col d-none d-xl-block position-static" style="float: right;">
                            <nav class="site-main-menu">
                                <ul>
                                    <li class="position-static">
                                        <!-- <a href="course"><span class="menu-text">Join BaseOnCode</span></a> -->
                                    </li>
                                    <li class="position-static">
                                        <a href="about_us"><span class="menu-text">About Us</span></a>
                                        
                                    </li>
                                    <li class="position-static">
                                        <a href="#"><span class="menu-text">Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Main Menu End -->


                                    <!-- Header Mobile Menu Toggle Start -->
                                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                        <button class="toggle">
                                            <i class="icon-top"></i>
                                            <i class="icon-middle"></i>
                                            <i class="icon-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- Header Mobile Menu Toggle End -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Right End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->
        <!--Login Register section start-->
        <div class="login-register-section section section-padding-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-1 col-lg-6" style="margin-left: auto; margin-right: auto;">
                                <!-- Register Form Start -->
                                <?php if(isset($_SESSION[$Error])): ?>
                                    <div class="alert alert-<?= $_SESSION['msg_type']; ?>">
                                        <?php
                                            echo $_SESSION[$Error];
                                            unset($_SESSION[$Error]);

                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="login-form-wrapper mt-sm-50 mt-xs-50">
                                    <h3 class="title">Registration Successful</h3>
                                    <p><span>Status: </span><?= $payment_message; ?></p>
                                    <p><span>Reference: </span><?= $ref_number; ?></p>
                                    <p><span>Amount: </span><?= $amount; ?></p>
                                    <p>An email has been sent to you with a receipt of the payment. Join the course telegram or whatsapp group by clicking the links below.</p>
                                    <ul>
                                        <li><a href="https://chat.whatsapp.com/CWRhCnrzeFJLjq4PiI0aR6"><span><i class="fab fa-whatsapp"></i></span> Whatsapp Course Group</a></li>
                                        <li><a href="https://t.me/+i7-yARStooIyNzI0"><span><i class="fab fa-telegram"></i></span> Telegram Course Group</a></li>
                                    </ul>
                                    <p>See you there.</p>
                                    

                                </div>
                                <!-- Register Form End -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Login Register section end-->



        <div class="footer-section section" data-bg-color="#171621">
            <div class="container">

                <!-- Footer Top Widgets Start -->
                <div class="row">

                    <!-- Footer Widget Start -->
                    <div class="col-xl-6 col-md-5 col-12 max-mb-50">
                        <div class="footer-widget light-color">
                            <h4 class="footer-widget-title">Reach Us</h4>
                            <div class="footer-widget-content">
                                <div class="content">
                                    <!-- <p>382 NE 191st St # 87394 Miami, FL 33179-3899</p> -->
                                    <p><span><i class="fab fa-whatsapp"></i></span> <a href="https://whatsapp.com/dl/" style="color: green;" target="blank"> Click Me</a> (9am - 5pm WAT, Monday - Friday) </p>
                                    <p><span><i class="fa fa-phone-alt"></i></span> <a href="tel:+2347064601346" style="color: green;"> Click Me</a> (9am - 5pm WAT, Monday - Friday) </p>
                                    <p><a href="#">info@baseoncode.com </a></p>
                                </div>
                                <div class="footer-social-inline">
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-3 col-md-4 col-sm-7 col-12 max-mb-50">
                        <div class="footer-widget light-color">
                            <h4 class="footer-widget-title">Explore</h4>
                            <div class="footer-widget-content">
                                <ul class="column">
                                    <li><a href="about_us">About us</a></li>
                                    <li><a href="contact_us">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-xl-3 col-md-3 col-sm-5 col-12 max-mb-50">
                        <div class="footer-widget light-color">
                            <h4 class="footer-widget-title">Information</h4>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="privacy">Privacy policy</a></li>
                                    <li><a href="terms">Terms of service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->

                </div>
                <!-- Footer Top Widgets End -->

                <!-- Footer Copyright Start -->
                <div class="row max-mt-20">
                    <div class="col">
                        <p class="copyright">&copy; 2022 BaseOnCode. <a href="#">All Rights Reserved</a></p>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>

        <!-- Newsletter Popup Start -->
        <!-- <div id="max-popup" class="max-popup-section section">
            <div class="max-popup-dialog animated fadeInUp">
                <button class="max-popup-close"><i class="fal fa-times"></i></button>
                <div class="max-popup-dialog-inner">
                    <div class="row">
                        <div class="col-md-5 col-12 d-none d-md-block">
                            <div class="freecourse-popup-image">
                                <img src="assets/images/others/popup-free-course.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-12 align-self-center">
                            <div class="freecourse-popup-content">
                                <h6 class="sub-title">Get Our Course free</h6>
                                <h2 class="title">Awesome for Website</h2>
                                <div class="freecourse-download-form">
                                    <form action="#">
                                        <div class="row max-mb-n20">
                                            <div class="col-12 max-mb-20">
                                                <input type="email" placeholder="Your E-mail">
                                            </div>
                                            <div class="col-12 max-mb-20">
                                                <button class="btn btn-primary btn-hover-secondary w-100">Download now</button>
                                            </div>
                                            <div class="col-12 max-mb-20">
                                                <small class="form-text text-center"><i class="fal fa-lock-alt mr-2"></i> Your infomation will never be shared with any third party</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter Popup End -->

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->
    </div>

    <div id="site-main-mobile-menu" class="site-main-mobile-menu">
        <div class="site-main-mobile-menu-inner">
            <div class="mobile-menu-header">
                <div class="mobile-menu-logo">
                    <a href="home"><img src="assets/images/logo/baseoncode.JPEG" alt="BaseOnCode"></a>
                </div>
                <div class="mobile-menu-close">
                    <button class="toggle">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-menu-content">
                <nav class="site-mobile-menu">
                    <ul>
                        <li class="has-children position-static">
                            <!-- <a href="course"><span class="menu-text">Join BaseOnCode</span></a> -->
                        </li>
                        <li class="has-children position-static">
                            <a href="about_us"><span class="menu-text">About Us</span></a>
                        </li>
                        <li class="has-children position-static">
                            <a href="contact_us"><span class="menu-text">Contact Us</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>



 
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>





</body>


</html>