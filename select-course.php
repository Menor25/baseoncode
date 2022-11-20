<?php 
    //session_start();
    require_once "includes/header.php"; 
    require_once "private/autoload.php"; 
?>

<?php

    if(isset($_POST['user-course'])){
        $course = $_POST['course'];
        //$_SESSION['course'] = $course;

    if ($course === "Frontend") {
            header('Location: frontend?course='. $course);
        } elseif ($course === "Backend") {
            header('Location: backend?course='. $course);
        } elseif ($course === "Content Writing") {
            header('Location: content-writing?course='. $course);
        } else {
            header('Location: virtual-assistant?course='. $course);
        }
        
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
                                            <h4 class="checkout-title">Select Course</h4>

                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-20">
                                                    <label>Course*</label>
                                                    <select name="course" id="course" class="form-control" required>
                                                        <?php if (isset($course)) { ?>
                                                        <option value="<?php if(isset($course)){echo $course;} ?>" disabled selected><?php if(isset($course)){echo $course;}else {echo "Select Course";} ?></option>
                                                        <?php } else { ?>
                                                            <option value="" disabled selected>Select Course</option>
                                                        <?php } ?>

                                                        <?php 
                                                            $courses = find_all("course");

                                                            foreach ($courses as $course) {
                                                                
                                                        ?>

                                                        <option value="<?= $course['course']; ?>"><?= $course['course']; ?></option>
                                                        <?php    } ?>
                                                    </select>
                                                </div>

                                                
                                                <button class="btn btn-primary btn-hover-secondary btn-width-100 mt-40" name="user-course">Proceed</button>
                                                

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