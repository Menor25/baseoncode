<?php include "includes/other_header.php"; ?>

        <!-- Page Title Section Start -->
        <div class="page-title-section section">
            <div class="page-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="home">Home</a></li>
                        <li class="current">Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->


        <!--Login section start-->
        <div class="login-register-section section section-padding-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6" style="margin-left: auto; margin-right: auto;">
                                <!-- Login Form Start -->
                                <div class="login-form-wrapper">
                                    <h3 class="title">Login</h3>
                                    <form class="login-form" action="#">
                                        <div class="single-input mb-30">
                                            <label for="username">Username or email</label>
                                            <input type="text" id="username" name="username" placeholder="Username or email">
                                        </div>
                                        <div class="single-input mb-30">
                                            <label for="password">Password</label>
                                            <input type="text" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="single-input mb-30">
                                            <div class="row">
                                                <div class="col-sm-6 remember-me-wrap">
                                                    <div class="checkbox-input">
                                                        <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                                        <label for="login-form-remember">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 lost-your-password-wrap">
                                                    <p>
                                                        <a href="#" class="lost-your-password">Lost your password?</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <button class="btn btn-primary btn-hover-secondary btn-width-100">Log In</button>
                                        </div>
                                        <p style="margin-top: 5px; text-align: center;">
                                            <span>Don't have an account? </span><a href="register" class="lost-your-password" style="color: red;">Register Here</a>
                                        </p>
                                    </form>
                                </div>
                                <!-- Login Form End -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Login Register section end-->

 <?php include "includes/other_footer.php"; ?>