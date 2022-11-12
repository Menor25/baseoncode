<?php include "includes/header.php"; ?>

<?php

    if(isset($_POST['user-country'])){
        $country = $_POST['country'];
        $_SESSION['country'] = $country;

        header('Location: course');
    }else{
       ?>
       
        <!-- Page Title Section Start -->
        <div class="page-title-section section section-padding-top-0">
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Enrollment</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->



        <!-- Contact Form Section Start -->
        <div class="contact-form-section section section-padding-bottom">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-4">
                        <div class="contact-title">
                            <h2 class="title">Or just drop me a line</h2>
                        </div>

                    </div> -->
                    <div class="col-lg-8" style="margin-left: auto; margin-right: auto;">
                        <div class="contact-form pl-90 pl-md-0 pl-sm-0 pl-xs-0">
                            <form action="" class="checkout-form" method="POST">
                                <div class="row row-40">

                                    <div class="col-lg-12">

                                        <!-- Billing Address -->
                                        <div id="billing-form" class="mb-12">
                                            <h4 class="checkout-title">Select Country</h4>

                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-20">
                                                    <label>Country*</label>
                                                    <select name="country" required>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>

                                                
                                                <button class="btn btn-primary btn-hover-secondary btn-width-100 mt-40" name="user-country">Proceed</button>
                                                

                                            </div>

                                        </div>

        
                                    </div>

                                   

                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Section End -->

        <?php include "includes/footer.php"; ?>
        <?php
    }
?>