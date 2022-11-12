<?php
    session_start();
    if (isset($_COOKIE["remember"])) {
    $_SESSION["user_id"] = $_COOKIE["remember"];
    }

    //   if (!isset($_GET["i"]) || $_GET["i"] == "") {
    //     header("Location: my_books.php");
    //     exit;
    //    }

    if (trim($_SESSION["user_id"]) == "") {
        header("Location: signin.php");
        exit;
    }

    $user_id = $_SESSION["user_id"];
    require_once "inc/config.php";
    include 'inc/db_connect.php';

    $query = "SELECT * FROM bossu_come WHERE system_id = '$user_id'";
    $result = $mysqli->query($query);
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $db_flag = intval($row["flag_user"]);
        $user_name = trim($row["username"]);
        $paid_user = trim($row['paid_user']);
        $email = trim($row['email']);
        $first_name = trim($row['first_name']);

        if ($db_flag == 0) {
            $_SESSION["asem"] = "<span style='color : red'>Your account has not been activated</span>";
            header("Location: signin.php");

            exit;
        }
    }

    if (isset($_GET["paid"])) {
        $paid = $_GET["paid"];
        if ($paid_user == 1) {
            header("Location: paid_books.php");
        } else {
            header("Location: payment.php");
        }
    }
?>

<?php
    require_once "inc/config.php";
    include 'inc/db_connect.php';
    date_default_timezone_set("Africa/Accra");
    require 'inc/user_info.php';
    UserInfo::get_ip();
    $user_ip = UserInfo::get_ip();

    if (isset($_GET["i"]) && intval($_GET["i"]) > 0) {
        $sku = intval($_GET["i"]);
        $query = "SELECT * FROM kenkan WHERE sku = $sku";
        // echo $query;
        $result2 = $mysqli->query($query);
        if (mysqli_num_rows($result2) != "0") {

            $row2 = $result2->fetch_array(MYSQLI_ASSOC);
            $title = $row2["title"];
            $pic = $row2["pic"];
            $synopsis = $row2["synopsis"];
            $author = $row2["author"];
            $sku = $row2["sku"];
            $book_id = $row2["id"];
        }
    }
?>
<?php require_once("subscription_plan.php"); ?>

<!doctype html>
<html class="no-js" lang="en">
    <head><script data-ad-client="ca-pub-8590560806899505" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=G-QG0271N5QC"></script><script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QG0271N5QC');
      </script>
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '470342770672131');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=470342770672131&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        <!-- Repixel Code -->
        <script>
          (function(w, d, s, id, src){
          w.Repixel = r = {
            init: function(id) {
              w.repixelId = id;
            }
          };
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)){ return; }
          js = d.createElement(s);
          js.id = id;
          js.async = true;
          js.onload = function(){
              Repixel.init(w.repixelId);
          };
          js.src = src;
          fjs.parentNode.insertBefore(js, fjs);
          }(window, document, 'script', 'repixel',
          'https://sdk.repixel.co/r.js'));
          Repixel.init('60d0e6445954a00009695966');
        </script>
        <!-- Repixel Code -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">-->
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <link rel="icon" href="img/d_logo.png" type="image/png" sizes="28x20">

        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- Font-Awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Flaticon css -->
        <link rel="stylesheet" href="css/flaticon.css">
        <!-- venobox css -->
        <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
        <!-- nivo slider css -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/emoji/css/emoji.css" rel="stylesheet">-->

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <script>
              $(document).ready(function (){
                  $("#page_numbers").click(function (){
                      $('html, body').animate({
                          scrollTop: $("#story_title").offset().top
                      }, 500);
                  });
              });
              </script>
              <script>
              function validate_ebook_address(){

                  var a = document.getElementById("email").value;
                  var b = document.getElementById("confirm_email").value;
                  if (a!=b) {
                    alert("Emails do no match");
                    return false;
                  }
              }
        </script>
    </head>

    <body>
        <!-- Add your site or application content here -->
        <!--Header Area Start-->
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="header-logo">
                            <a href="index.php">
                                <img src="img/d_logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-10 col-sm-12 hidden-xs">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="#">READ</a>
                                        <ul class="sub-menu">
                                            <li><a href="my_books.php">Books</a></li>
                                            <li><a href="humans_connect.php">Humans Connect</a></li>
                                            <li><a href="short_stories.php">Short Stories</a></li>
                                            <li><a href="text_stories.php">Text Stories</a></li>
                                            <li><a href="dominion_book.php">DOMINION</a></li>
                                            <!--<li><a href="featured_books.php">Featured Books</a></li>-->
                                        </ul>
                                    </li>
                                    <!--<li><a href="#">ORDER BOOKS</a>
                                        <ul class="sub-menu">
                                            <li><a href="dominion_book.php">DOMINION (HARD COPY)</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="#">SOCIAL MEDIA</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://instagram.com/dioncecreativity?igshid=1drkltwoceifc">Instagram</a></li>
                                            <li><a href=" https://www.facebook.com/Dionce.Creativity/">Facebook</a></li>
                                            <li><a href="https://t.me/dioncecreativity">Telegram</a></li>
                                            <li><a href="https://twitter.com/DionceCreatvity">Twitter</a></li>
                                            <li><a href="https://wa.me/message/EUKJ27GPP2IJD1">Whatsapp</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="chichis_world.php">CHICHI'S WORLD</a></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                    <li><a href="sponsor.php">BECOME A PARTNER</a></li>

                                   <!-- <li><a href="donate.php">DONATE</a></li>-->

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Header Area End-->
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="sub-menu" id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="about.php">ABOUT US</a></li>
                                    <li><a href="#">READ</a>
                                        <ul class="sub-menu">
                                            <li><a href="my_books.php">Books</a></li>
                                            <li><a href="humans_connect.php">Humans Connect</a></li>
                                            <li><a href="short_stories.php">Short Stories</a></li>
                                            <li><a href="text_stories.php">Text Stories</a></li>
                                            <li><a href="dominion_book.php">DOMINION</a></li>
                                            <!--<li><a href="featured_books.php">Featured Books</a></li>-->
                                        </ul>
                                    </li>
                                   <!-- <li><a href="#">ORDER BOOKS</a>
                                        <ul class="sub-menu">
                                            <li><a href="dominion_book.php">DOMINION (HARD COPY)</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">SOCIAL MEDIA</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://instagram.com/dioncecreativity?igshid=1drkltwoceifc">Instagram</a></li>
                                            <li><a href=" https://www.facebook.com/Dionce.Creativity/">Facebook</a></li>
                                            <li><a href="https://t.me/dioncecreativity">Telegram</a></li>
                                            <li><a href="https://twitter.com/DionceCreatvity">Twitter</a></li>
                                            <li><a href="https://wa.me/message/EUKJ27GPP2IJD1">Whatsapp</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="chichis_world.php">CHICHI'S WORLD</a></li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                    <li><a href="sponsor.php">BECOME A PARTNER</a></li>

                                   <!-- <li><a href="#">DONATE</a></li>-->


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->

        <section class="page">
            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row center-div">
                        <div class="col-sm-3 margin-b-30">
                            <div class="price-box dark">
                                <h3>
                                    <?=  $_SESSION['title']; ?> 
                                </h3>
                                <h4><sup><?= $_SESSION['currency']; ?></sup><?= $_SESSION['price']; ?><span>Per Month</span></h4>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-tags"></i> Access to all stories</li>
                                    <li></li>
                                    <li></li>


                                </ul>
                                <p>
                                    <?= $_SESSION['description']; ?>
                                </p>
                                <!-- <a href="#" class="btn btn-primary" style="background-color: #bf3cff;">Subscribe <i class="fa fa-angle-right"></i></a> -->
                                    <!-- <div id="paypal-button-container" style="padding: 10px;">
                                
                                    </div> -->
                                <form action="" method="POST">
                                    <button name="premium" class="btn btn-primary" style="background-color: #bf3cff;">Subscribe <i class="fa fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div><!--col-->
                    </div>
                </div> 
            </div>
        </section>

        <?php include 'inc/footer.php'; ?>

      <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
    <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
    <!-- jquery Counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script> 
    <!-- jquery countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
    <!-- jquery countdown js -->
        <script type="text/javascript" src="venobox/venobox.min.js"></script>
    <!-- jquery Meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
    <!-- wow js -->
        <script src="js/wow.min.js"></script> 
    
    <script>
      new WOW().init();
    </script>

    <!--Paypal-->
    <script src="https://www.paypal.com/sdk/js?client-id=AXuaCNsN2p9O1AVvKLykk3pQKg9_8Fi0yKI63jYkk9mvowIAT1QuTHCU5YKTeOgGl0Kke7Bi4za0E5Zl"></script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'horizontal',
                color:  'gold',
                shape:  'rect',
                label:  'pay',
                tagline: 'false'
            },
            createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                amount: {
                    value: <?= $_SESSION['price']; ?>
                }
                }]
            });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
                });

                if($_SESSION['price'] == 1){
                    $current_date = date("Y/m/d");
                    $expiration_date = date("Y/m/d", strtotime('+30 days'));

                    $payment_query = "UPDATE bossu_come SET paid_user = 1, created_at = 
                    '{$current_date}', expiration_date = '{$expiration_date}' WHERE system_id = '{$user_id}'";
                    // echo $payment_query;
                    $payment_success_query = mysqli_query($mysqli, $payment_query);
                    header("Location: verified_reader.php?i=$sku");
                }elseif($_SESSION['price'] == "2.70"){
                    $current_date = date("Y/m/d");
                    $expiration_date = date("Y/m/d", strtotime('+90 days'));

                    $payment_query = "UPDATE bossu_come SET paid_user = 1, created_at = 
                    '{$current_date}', expiration_date = '{$expiration_date}' WHERE system_id = '{$user_id}'";
                    // echo $payment_query;
                    $payment_success_query = mysqli_query($mysqli, $payment_query);
                    header("Location: verified_reader.php?i=$sku");
                }elseif($_SESSION['price'] == 10 || $_SESSION['price'] == 20){
                    $current_date = date("Y/m/d");
                    $expiration_date = date("Y/m/d", strtotime('+1 years'));

                    $payment_query = "UPDATE bossu_come SET paid_user = 1, created_at = 
                    '{$current_date}', expiration_date = '{$expiration_date}' WHERE system_id = '{$user_id}'";
                    // echo $payment_query;
                    $payment_success_query = mysqli_query($mysqli, $payment_query);
                    header("Location: verified_reader.php?i=<?=$sku;?>");
                }
                
            },
            onCancel: function (data) {
                // Show a cancel page, or return to cart
                window.location.href = "payment.php?i=<?=$sku;?>";
            },
            onError: function (err) {
                // For example, redirect to a specific error page
                window.location.href = "/your-error-page-here";
            }
        }).render('#paypal-button-container');
    </script>

    <!--Check for sub expiring date-->
    <?php
        $check_reg = "SELECT * FROM bossu_come WHERE system_id = '{$user_id}'";
        $check_reg_query = mysqli_query($mysqli, $check_reg);
        while($row = mysqli_fetch_assoc($check_reg_query)){
            $sub_date = $row['created_at'];
            $exp_date = $row['expiration_date'];
        }
        if(strtotime($sub_date) > strtotime($exp_date)){
            $sub_query = "UPDATE bossu_come SET paid_user = 0 WHERE system_id = '{$user_id}'";
            // echo $payment_query;
            $sub_exp_query = mysqli_query($mysqli, $sub_query);
            
            header("Location: reading_book.php");
        }
    ?>
    </body>
</html>