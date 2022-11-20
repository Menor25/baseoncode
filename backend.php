<?php
    //session_start();
    include "includes/header.php"; 
    include "private/autoload.php"; 

    $choosen_course = $_GET['course'];
    if (empty($choosen_course)) {
        header("Location: select-course");
    }
?>

<?php
   
$backend = array("name" => "Theophilus Menor", "stack" => "Backend", 
                        "desc" => "Menor is a brilliant educator and mentor, who has spent most of his life writing code in diverse programming languages. Being a full-stack self taught programmer, he encountered a lot of obstacles and set back. With a true spirit and talented gift, he was able to succeed and set an example for others.",
                        "socials" => array("facebook" => "https://www.facebook.com/theophilus.menor", "twitter" => "https://twitter.com/DevMenor", "linkedin" => "https://www.linkedin.com/in/theophilus-menor-a06b56b2/", "youtube" => "https://www.youtube.com/@baseoncode", "instagram" => ""));
    //print_r($backend);
    //echo $backend['name'];

?>

        <!-- Course Details Section Start -->
        <div class="section" style="margin-bottom: 20px; margin-top: 20px;">
            <div class="container">
                <div class="row max-mb-n50">

                    <div class="col-lg-8 col-12 order-lg-1 max-mb-50">
                        <!-- Course Details Wrapper Start -->
                        <div class="course-details-wrapper">
                            <div class="course-nav-tab">
                                <ul class="nav">
                                    <!-- <li><a class="active" data-bs-toggle="tab" href="#overview">Overview</a></li> -->
                                    <!-- <li><a class="active" data-bs-toggle="tab" href="#curriculum">Curriculum</a></li> -->
                                    <li><a data-bs-toggle="tab" href="#instructor">Instructor</a></li>
                                    <li><a data-bs-toggle="tab" href="#reviews">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <!-- <div id="curriculum" class="tab-pane fade show active">
                                    <div class="course-curriculum">
                                        <ul class="curriculum-sections">
                                            <li class="single-curriculum-section">
                                                <div class="section-header">
                                                    <div class="section-left">

                                                        <h5 class="title">Simplification</h5>
                                                        <p class="section-desc">General Introduction to Web Development</p>

                                                    </div>
                                                </div>
                                                <ul class="section-content">

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.1: How the internet works</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.2: Color Theory</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.3: Typography</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Live meeting about Infotech Strategies</span>
                                                            <div class="course-item-meta">
                                                                <i class="fas fa-lock-alt"></i>
                                                                <span class="item-meta item-meta-icon zoom-meeting">
                                                                    <i class="far fa-users-class"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Quiz 1: Yes or No?</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">3 questions</span>
                                                                <span class="item-meta duration">20 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.4: Github</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">1 hour</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.5: Intermediate HTML</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">1 hour</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Code Challenge</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">1 question</span>
                                                                <span class="item-meta duration">24 hours</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.6: Advanced HTML</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">2 hours</span>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="far fa-video"></i>
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Code Challenge</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">1 question</span>
                                                                <span class="item-meta duration">2 days</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 1.7: HTML Wrap Up</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Final Code Challenge</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">1 question</span>
                                                                <span class="item-meta duration">2 days</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">

                                                            <span class="item-name">Grading</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">0 question</span> 
                                                                <span class="item-meta duration">10 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="single-curriculum-section">
                                                <div class="section-header">
                                                    <div class="section-left">

                                                        <h5 class="title">Cascading Style Sheet</h5>
                                                        <p class="section-desc">Learn about the basics of CSS</p>

                                                    </div>
                                                </div>
                                                <ul class="section-content">

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.1: Introduction to CSS</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.2: Inline CSS</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.3: Internal and External CSS</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.2: CSS Intermediate to Advance</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.3: Classes and Ids</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Code Challenge</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">1 question</span>
                                                                <span class="item-meta duration">24 hours</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.4: Favicons</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">15 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.7: Divs</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.5: Box Model of Website Styling</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.9: Display Property</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.10: Positioning</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.11: Font Styling and Sizing</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.12: Float and Clear</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 2.13: Grid and Flex</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">1 Hour</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link" href="JavaScript:Void(0);">
                                                            <span class="item-name">Final Code Challenge</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">1 question</span>
                                                                <span class="item-meta duration">2 days</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">

                                                            <span class="item-name">Grading</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta count-questions">0 question</span>
                                                                <span class="item-meta duration">10 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>


                                                    

                                                </ul>
                                            </li>

                                            <li class="single-curriculum-section">
                                                <div class="section-header">
                                                    <div class="section-left">

                                                        <h5 class="title">Bootstrap Framework</h5>
                                                        <p class="section-desc">Learn about the basics of Bootstrap</p>

                                                    </div>
                                                </div>
                                                <ul class="section-content">

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 3.1: Introduction to Bootstrap</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 3.2: Bootstrap Intermediate to Advance</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                                                                      

                                                    
                                                   

                                                    

                                                   


                                                    

                                                </ul>
                                            </li>

                                            <li class="single-curriculum-section">
                                                <div class="section-header">
                                                    <div class="section-left">

                                                        <h5 class="title">Vanilla Javascript</h5>
                                                        <p class="section-desc">Learn about the basics of Javascript</p>

                                                    </div>
                                                </div>
                                                <ul class="section-content">

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 4.1: Introduction to Javascript</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 4.2: Intermediate Javascript</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 4.3: The Document Object Model(DOM)</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                                                                      

                                                    
                                                   

                                                    

                                                   


                                                    

                                                </ul>
                                            </li>

                                            <li class="single-curriculum-section">
                                                <div class="section-header">
                                                    <div class="section-left">

                                                        <h5 class="title">React Framework</h5>
                                                        <p class="section-desc">Learn about the basics of React</p>

                                                    </div>
                                                </div>
                                                <ul class="section-content">

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 5.1: Introduction to React</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 5.2: Introduction to JSX and Babel</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li class="course-item">
                                                        <a class="section-item-link lesson" href="JavaScript:Void(0);">
                                                            <span class="item-name">Lesson 5.3: React Intermediate to Advance</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">30 min</span>
                                                                <span class="item-meta item-meta-icon">
                                                                    <i class="fas fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                                                                      

                                                    
                                                   

                                                    

                                                   


                                                    

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->

                                <div id="instructor" class="tab-pane fade show active">
                                    <div class="course-instructor">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="profile-image">
                                                    <img src="assets/images/profile/menor.jpg" alt="profile">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profile-info">
                                                    <h5><a href="#"><?= $backend['name']; ?></a></h5>
                                                    <div class="author-career">Lead Mentor / Instructor</div>
                                                    <p class="author-bio"><?= $backend['desc'] ?></p>


                                                    <ul class="author-social-networks">
                                                        <?php 
                                                            if($backend['socials']['twitter'] != "") {

                                                        ?>
                                                            <li class="item">
                                                                <a href="<?= $backend['socials']['twitter']; ?>" target="_blank" class="social-link"> <i class="fab fa-twitter social-link-icon"></i> </a>
                                                            </li>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php 
                                                            if($backend['socials']['facebook'] != "") {

                                                        ?>
                                                        <li class="item">
                                                            <a href="https://www.facebook.com/theophilus.menor" target="_blank" class="social-link"> <i class="fab fa-facebook-f social-link-icon"></i> </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php 
                                                            if($backend['socials']['linkedin'] != "") {

                                                        ?>
                                                        <li class="item">
                                                            <a href="https://www.linkedin.com/in/theophilus-menor-a06b56b2/" target="_blank" class="social-link"> <i class="fab fa-linkedin social-link-icon"></i> </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php 
                                                            if($backend['socials']['instagram'] != "") {

                                                        ?>
                                                        <li class="item">
                                                            <a href="" target="_blank" class="social-link"> <i class="fab fa-instagram social-link-icon"></i> </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php 
                                                            if($backend['socials']['youtube'] != "") {

                                                        ?>
                                                        <li class="item">
                                                            <a href="https://www.youtube.com/@baseoncode" target="_blank" class="social-link"> <i class="fab fa-youtube social-link-icon"></i> </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        ?>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="reviews" class="tab-pane fade">
                                    <div class="course-reviews">
                                        <div class="course-rating">
                                            <h3 class="title">Reviews</h3>
                                            <div class="course-rating-content">
                                                <div class="average-rating">
                                                    <p class="rating-title secondary-color">Average Rating</p>
                                                    <div class="rating-box">
                                                        <div class="average-value primary-color">
                                                            4.50
                                                        </div>
                                                        <div class="review-star">
                                                            <div class="tm-star-rating">
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                            </div>
                                                        </div>
                                                        <div class="review-amount">
                                                            (2 ratings)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detailed-rating">
                                                    <p class="rating-title secondary-color">Detailed Rating</p>
                                                    <div class="rating-box">
                                                        <div class="rating-rated-item">
                                                            <div class="rating-point">
                                                                <div class="tm-star-rating">
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                </div>
                                                            </div>
                                                            <div class="rating-progress">
                                                                <div class="single-progress-bar">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-count">1</div>
                                                        </div>

                                                        <div class="rating-rated-item">
                                                            <div class="rating-point">
                                                                <div class="tm-star-rating">
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                </div>
                                                            </div>
                                                            <div class="rating-progress">
                                                                <div class="single-progress-bar">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-count">1</div>
                                                        </div>

                                                        <div class="rating-rated-item">
                                                            <div class="rating-point">
                                                                <div class="tm-star-rating">
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                </div>
                                                            </div>
                                                            <div class="rating-progress">
                                                                <div class="single-progress-bar">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-count">0</div>
                                                        </div>

                                                        <div class="rating-rated-item">
                                                            <div class="rating-point">
                                                                <div class="tm-star-rating">
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                </div>
                                                            </div>
                                                            <div class="rating-progress">
                                                                <div class="single-progress-bar">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-count">0</div>
                                                        </div>

                                                        <div class="rating-rated-item">
                                                            <div class="rating-point">
                                                                <div class="tm-star-rating">
                                                                    <span class="fas fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                    <span class="far fa-star"></span>
                                                                </div>
                                                            </div>
                                                            <div class="rating-progress">
                                                                <div class="single-progress-bar">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rating-count">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="course-reviews-area">
                                            <ul class="course-reviews-list">
                                                <li class="review">
                                                    <div class="review-container">
                                                        <div class="review-author">
                                                            <img src="assets/images/review-author/author1.jpg" alt="author">
                                                        </div>
                                                        <div class="review-content">
                                                            <h4 class="title">ednawatson</h4>
                                                            <div class="review-stars-rated" title="5 out of 5 stars">
                                                                <div class="review-stars empty"></div>
                                                            </div>
                                                            <h5 class="review-title">Cover all my needs </h5>
                                                            <div class="review-text">
                                                                The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="review">
                                                    <div class="review-container">
                                                        <div class="review-author">
                                                            <img src="assets/images/review-author/author2.jpg" alt="author">
                                                        </div>
                                                        <div class="review-content">
                                                            <h4 class="title">Owen Christ</h4>
                                                            <div class="review-stars-rated" title="5 out of 5 stars">
                                                                <div class="review-stars empty"></div>
                                                            </div>
                                                            <h5 class="review-title">Engaging & Fun</h5>
                                                            <div class="review-text">
                                                                This is the third course I attend from you, and I absolutely loved all of them. Especially this one on leadership. Your method of explaining the concepts, fun, engaging and with real-world examples, is excellent. This course will help me a lot in my job, my career, and life in general, and I thank you for that. Thank you for improving the lives of many people with engaging and in-depth courses.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course Details Wrapper End -->
                    </div>

                    <div class="col-lg-4 col-12 order-lg-2 max-mb-50" id="sticky-sidebar">
                        <div class="sidebar-widget-wrapper pr-0">
                            <div class="sidebar-widget">
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-entry-course-info">
                                        <div class="course-price">
                                            <span class="meta-label">
                                                <i class="meta-icon far fa-money-bill-wave"></i>
                                                Price	
                                            </span>
                                            <span class="meta-value">
                                                <span class="price"><span>&#x20A6;</span>20,000 ($30)</span>
                                            </span>
                                        </div>
                                        <div class="course-meta">
                                            <div class="course-instructor">
                                                <span class="meta-label">
                                                    <i class="far fa-chalkboard-teacher"></i>
                                                    Instructor				
                                                </span>
                                                <span class="meta-value"><?= $backend['name'] ?></span>
                                            </div>
                                            <div class="course-duration">
                                                <span class="meta-label">
                                                    <i class="far fa-clock"></i>
                                                    Duration				
                                                </span>
                                                <span class="meta-value">12 weeks</span>
                                            </div>
                                            <!-- <div class="course-lectures">
                                                <span class="meta-label">
                                                    <i class="far fa-file-alt"></i>
                                                    Lectures				
                                                </span>
                                                <span class="meta-value">24</span>
                                            </div> -->

                                            <div class="course-students">
                                                <span class="meta-label">
                                                    <i class="far fa-user-alt"></i>

                                                    <?php 
                                                        $student_count = count_all();
                                                    ?>
                                                    Enrolled	
                                                </span>
                                                <span class="meta-value"><?= $student_count; ?> students</span>
                                            </div>
                                            <div class="course-language">
                                                <span class="meta-label">
                                                    <i class="far fa-language"></i>
                                                    Language				
                                                </span>
                                                <span class="meta-value">English</span>
                                            </div>
                                            <div class="course-time">
                                                <span class="meta-label">
                                                    <i class="far fa-calendar"></i>
                                                    Deadline				
                                                </span>
                                                <span class="meta-value">20th December, 2022</span>
                                            </div>
                                        </div>
                                        <div class="lp-course-buttons">
                                            <a href="register?course=<?= $choosen_course; ?>" class="btn btn-primary btn-hover-secondary btn-width-100">Enroll</a>
                                        </div>
                                        <div class="entry-course-share">
                                            <div class="share-media">

                                                <div class="share-label">Share this course</div>
                                                <span class="share-icon far fa-share-alt"></span>

                                                <div class="share-list">
                                                    <a class="hint--bounce hint--top hint--theme-two" aria-label="Facebook" target="_blank" href="facebook.com"><i class="fab fa-facebook-f"></i></a>

                                                    <a class="hint--bounce hint--top hint--theme-two" aria-label="Twitter" target="_blank" href="twitter.com"><i class="fab fa-twitter"></i></a>

                                                    <a class="hint--bounce hint--top hint--theme-two" aria-label="Linkedin" target="_blank" href="linkedin.com"><i class="fab fa-linkedin"></i></a>

                                                    <!-- <a class="hint--bounce hint--top hint--theme-two" aria-label="Youtube" target="_blank" href="JavaScript:Void(0);"><i class="fa instagram"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Course Details Section End -->

 




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
                    <a href="index.html"><img src="assets/images/logo/dark-logo.png" alt=""></a>
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
                            <a href="#"><span class="menu-text">Home</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>

                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li><a href="index.html"><span class="menu-text">MaxCoach Education <span class="badge">Hot</span></span></a></li>
                                        <li><a href="index-2.html"><span class="menu-text">Course Portal</span></a></li>
                                        <li><a href="index-3.html"><span class="menu-text">Distant Learning <span class="badge">Hot</span></span></a></li>
                                        <li><a href="index-4.html"><span class="menu-text">Multimedia Pedagogy</span></a></li>
                                        <li><a href="index-5.html"><span class="menu-text">Modern Schooling</span></a></li>
                                        <li><a href="index-6.html"><span class="menu-text">Remote Training</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="index-7.html"><span class="menu-text">Health Coaching</span></a></li>
                                        <li><a href="index-8.html"><span class="menu-text">Gym Coaching</span></a></li>
                                        <li><a href="index-9.html"><span class="menu-text">Business</span></a></li>
                                        <li><a href="index-10.html"><span class="menu-text">Artist <span class="badge primary">New</span></span></a></li>
                                        <li><a href="index-11.html"><span class="menu-text">Kitchen Coach <span class="badge primary">New</span></span></a></li>
                                        <li><a href="index-12.html"><span class="menu-text">Motivation <span class="badge primary">New</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-50">
                                    <ul>
                                        <li><a href="#"><img src="assets/images/menu/mega-menu.jpg" alt="menu-image"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Pages</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="start-here.html"><span class="menu-text">Start Here</span></a></li>
                                <li><a href="success-story.html"><span class="menu-text">Success Story</span></a></li>
                                <li><a href="about-me.html"><span class="menu-text">About me</span></a></li>
                                <li><a href="about-us-1.html"><span class="menu-text">About us 01</span></a></li>
                                <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                                <li><a href="about-us-3.html"><span class="menu-text">About us 03</span></a></li>
                                <li><a href="contact-me.html"><span class="menu-text">Contact me</span></a></li>
                                <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                                <li><a href="purchase-guide.html"><span class="menu-text">Purchase Guide</span></a></li>
                                <li><a href="privacy-policy.html"><span class="menu-text">Privacy Policy</span></a></li>
                                <li><a href="terms-of-service.html"><span class="menu-text">Terms of Service</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Courses</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="courses-grid-1.html"><span class="menu-text">Courses Grid 01</span></a></li>
                                <li><a href="courses-grid-2.html"><span class="menu-text">Courses Grid 02</span></a></li>
                                <li><a href="courses-grid-3.html"><span class="menu-text">Courses Grid 03</span></a></li>
                                <li><a href="membership-levels.html"><span class="menu-text">Membership Levels</span></a></li>
                                <li><a href="become-a-teacher.html"><span class="menu-text">Become a Teacher</span></a></li>
                                <li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
                                <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                <li class="has-children">
                                    <a href="course-details-sticky-feature-bar.html"><span class="menu-text">Single Layout</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="course-details-free.html"><span class="menu-text">Free Course</span></a></li>
                                        <li><a href="course-details-sticky-feature-bar.html"><span class="menu-text">Sticky Features Bar</span></a></li>
                                        <li><a href="course-details-standard-sidebar.html"><span class="menu-text">Standard Sidebar</span></a></li>
                                        <li><a href="course-details-no-sidebar.html"><span class="menu-text">No Sidebar</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Event</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="event.html"><span class="menu-text">Event</span></a></li>
                                <li><a href="zoom-meetings.html"><span class="menu-text">Zoom Meetings</span></a></li>
                                <li><a href="event-details.html"><span class="menu-text">Event Details</span></a></li>
                                <li><a href="zoom-event-details.html"><span class="menu-text">Zoom Meeting Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Blog</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html"><span class="menu-text">Blog Grid</span></a></li>
                                <li><a href="blog-masonry.html"><span class="menu-text">Blog Masonry</span></a></li>
                                <li><a href="blog-classic.html"><span class="menu-text">Blog Classic</span></a></li>
                                <li><a href="blog-list.html"><span class="menu-text">Blog List</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Shop</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                <li><a href="shopping-cart.html"><span class="menu-text">Cart</span></a></li>
                                <li><a href="shopping-cart-empty.html"><span class="menu-text">Cart Empty</span></a></li>
                                <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                <li><a href="product-details.html"><span class="menu-text">Single Product</span></a></li>
                                <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                <li><a href="login-register.html"><span class="menu-text">Login Register</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>