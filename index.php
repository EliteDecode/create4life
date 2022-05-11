<?php
  include('./includes/header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./includes/stylingIndex.php') ?>

</head>

<?php include('./includes/nav.php')
 ?>


<!--banner section-->
<section class="banner">
    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active bg1">
                <div class=" banner__item">
                    <div class="banner__content">
                        <h3 data-aos="fade-down" data-aos-delay="100">SPONSOR A CHILD TODAY</h3>
                        <p data-aos="fade-up" data-aos-delay="500">With the cold hearted happenings in our environment
                            today, We do the best to let every child
                            smile</p>
                        <h6 data-aos="fade-up" data-aos-delay="700">Powered by <span class='meadow'>TIM MEADOWS</span>
                        </h6>
                        <a href="donations.php"><button class=" btn-life" data-aos="fade-up"
                                data-aos-delay="1000">Donate Now</button></a>
                    </div>

                </div>
            </div>
            <div class="carousel-item bg2">
                <div class=" banner__item">
                    <div class="banner__content">
                        <h3 data-aos="fade-down" data-aos-delay="100">IT'S TIME FOR A BETTER HELP</h3>
                        <p data-aos="fade-up" data-aos-delay="500">Be part of the generous movement today, let the world
                            know you cre
                        </p>
                        <h6 data-aos="fade-up" data-aos-delay="700">Powered by <span class='meadow'>TIM MEADOWS</span>
                        </h6>
                        <a href="donations.php"><button class=" btn-life" data-aos="fade-up"
                                data-aos-delay="1000">Donate Now</button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item bg3">
                <div class=" banner__item">
                    <div class="banner__content">
                        <h3 data-aos="fade-down" data-aos-delay="100">SUPPORT CHILD EDUCATION</h3>
                        <p data-aos="fade-up" data-aos-delay="500">Every child should have an opportunity to be
                            educated,
                            Lets
                            make this happen
                        </p>
                        <h6 data-aos="fade-up" data-aos-delay="700">Powered by <span class='meadow'>TIM MEADOWS</span>
                        </h6>
                        <a href="donations.php"><button class=" btn-life" data-aos="fade-up"
                                data-aos-delay="1000">Donate Now</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<!--end-->


<!--About us--->
<section class="about">
    <div class="container">
        <h3 class='h3'>ABOUT <span class='beneath'> US</span></h3>
        <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 col-xs-12 about_write_up">
                <h6>WHO WE <span class="beneath">ARE</span> </h6>
                <p>We've lived a life dedicated to assisting others.
                    Our realization of humanity's issues culminated in a vision to better the lives of both children
                    and adults.
                    We both work extensively to ensure the programs' success. <br>
                    Our main focus is on children who live in remote areas, cut off from the rest of the world by
                    geography, language, and opportunities.
                    Without our assistance, they would stay isolated, illiterate, and impoverished, following in their
                    ancestors' path. <br>
                    These children are learning the language of the world outside their hamlet with our assistance. We
                    see to it that our children reach their maximum potential, which includes obtaining a college
                    education.</p>
            </div>
            <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="about__img">

                </div>
            </div>
        </div>
        <div class="about__goal">
            <h6> <span class="beneath">OUR</span> GOAL </h6>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 col-sm-12 col-xs-12  ">
                    <div class="about__goal__details">
                        <i class="fa fa-children"></i>
                        <h5>Save Children</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3 col-sm-12 col-xs-12  ">
                    <div class="about__goal__details">
                        <i class="fa fa-book"></i>
                        <h5>Good Education</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3 col-sm-12 col-xs-12  ">
                    <div class="about__goal__details">
                        <i class="fa fa-medkit"></i>
                        <h5>Better Healthcare</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3 col-sm-12 col-xs-12  ">
                    <div class="about__goal__details">
                        <i class="fa fa-pepper-hot"></i>
                        <h5>Quality Nutrition</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--end-->

<!--Lastest Causes-->
<section class="causes">
    <div class="container">
        <h3 class='h3'>LATEST CAU<span class="beneath">SES</span> </h3>

        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="800">
                <div class="causes__box shadow">
                    <img src="images/safety.jpg" alt="">
                    <h6>Children Safety</h6>
                    <div class="fill_up">
                        <div class="fill">

                            <h5> <span>Fill UP:
                                </span><i class="fa fa-dollar"></i>28,000 </h5>
                        </div>
                        <div class="fill">

                            <h5><span>Target:
                                </span><i class="fa fa-dollar"></i>35,000 </h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <a href="donations.php"><button class="btn btn-donate">Donate</button></a>
                </div>

            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 big " data-aos="fade-right" data-aos-delay="800">
                <div class="causes__box shadow">
                    <img src="images/water.jpg" alt="">
                    <h6>Child Health care</h6>
                    <div class="fill_up">
                        <div class="fill">

                            <h5> <span>Fill UP:
                                </span><i class="fa fa-dollar"></i>28,000 </h5>
                        </div>
                        <div class="fill">

                            <h5><span>Target:
                                </span><i class="fa fa-dollar"></i>75,000 </h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">15%</div>
                    </div>
                    <a href="donations.php"><button class="btn btn-donate">Donate</button></a>
                </div>

            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="600">
                <div class="causes__box shadow">
                    <img src="images/water.jpg" alt="">
                    <h6>Clean Water</h6>
                    <div class="fill_up">
                        <div class="fill">

                            <h5> <span>Fill UP:
                                </span><i class="fa fa-dollar"></i>8,900 </h5>
                        </div>
                        <div class="fill">

                            <h5><span>Target:
                                </span><i class="fa fa-dollar"></i>30,000 </h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <a href="donations.php"><button class="btn btn-donate">Donate</button></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="400">
                <div class="causes__box shadow">
                    <img src="images/edu.jpg" alt="">
                    <h6>Quality Education</h6>
                    <div class="fill_up">
                        <div class="fill">

                            <h5> <span>Fill UP:
                                </span><i class="fa fa-dollar"></i>21,000 </h5>
                        </div>
                        <div class="fill">

                            <h5><span>Target:
                                </span><i class="fa fa-dollar"></i>45,000 </h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                    <a href="donations.php"><button class="btn btn-donate">Donate</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--===================Countdown/subscribe Section=========================-->
<!-- counter_area  -->
<div class="counter_area counter_bg_1 overlay_03">
    <div class="container">
        <div class="row ">
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="single_counter text-center">
                    <div class="counter_icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <h3> <span class="counter">4</span> <span> +</span> </h3>
                    <p>Years Of Establishment</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="single_counter text-center">
                    <div class="counter_icon">
                        <i class="fa fa-children"></i>
                    </div>
                    <h3> <span class="counter">1200</span> <span>+</span> </h3>
                    <p>Children Reached</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="single_counter text-center">
                    <div class="counter_icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3> <span class="counter">20</span><span> +</span></h3>
                    <p>Events</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="single_counter text-center">
                    <div class="counter_icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3> <span class="counter">100</span><span> +</span> </h3>
                    <p>Volunteers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /counter_area  -->
<!--===================End Countdown=========================-->



<!--How can you help !-->

<section class="help">
    <div class="container">
        <h3>HOW CAN YOU <span class='beneath'>HELP</span> </h3>
        <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="help__img">

                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                        <div class="help_boxes ">
                            <i class="fa fa-donate"></i>
                            <h5>Send Donations</h5>
                            <a href="donations.php"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                        <div class="help_boxes ">
                            <i class="fa fa-box"></i>
                            <h5>Send Giftings</h5>
                            <a href="donations.php"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                        <div class="help_boxes ">
                            <i class="fa fa-handshake"></i>
                            <h5>Become a Volunteer</h5>
                            <a href="donations.php"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                        <div class="help_boxes ">
                            <i class="fa fa-child"></i>
                            <h5>Feed a Child</h5>
                            <a href="donations.php"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end-->


<!--upcominng events-->
<section class="events">
    <div class="container">
        <h3> <span class="beneath">UP</span>COMING EVENTS </h3>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="600">
                <div class="event__box shadow">
                    <img src="images/image_01.jpg" alt="">
                    <h6 style=' opacity: .7;'>Feed A Child Today</h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="600">
                <div class="event__box shadow">
                    <img src="images/image_08.jpg" alt="">
                    <h6 style=' opacity: .7;'>Education Walk And Talk</h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="400">
                <div class="event__box shadow">
                    <img src="images/hyg.jpg" alt="">
                    <h6 style=' opacity: .7;'>The Hygiene of a Child</h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="400">
                <div class="event__box shadow">
                    <img src="images/water2.jpg" alt="">
                    <h6 style=' opacity: .7;'>The water project</h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="400">
                <div class="event__box shadow">
                    <img src="images/health.png" alt="">
                    <h6 style=' opacity: .7;'>Talk Health Care </h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12 col-xs-12 " data-aos="fade-right" data-aos-delay="400">
                <div class="event__box shadow">
                    <img src="images/peace.jpg" alt="">
                    <h6 style=' opacity: .7;'>Child Peace</h6>

                    <h5>Powered By TIM MEADOWS</h5>
                    <div class="donate">
                        <a href="donations.php">
                            <h5>Donate</h5> <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->


<!--Gallery-->
<section class="gallery">
    <div class="container">
        <h3> <span class="beneath">OUR</span> GALLERY </h3>
        <div id="owl-demo" class="owl-carousel owl-theme">

            <div class="item"><a href="images/image_01.jpg" class=' shadow fresco' data-fresco-group="projects"><img
                        src="images/image_01.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_02.jpg" class='shadow fresco' data-fresco-group="projects"><img
                        src="images/image_02.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_03.jpg" class='shadow fresco' data-fresco-group="projects"><img
                        src="images/image_03.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_04.jpg" class='shadow fresco' data-fresco-group="projects"><img
                        src="images/image_04.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_05.jpg" class=' shadow fresco' data-fresco-group="projects"><img
                        src="images/image_05.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_06.jpg" class='shadow fresco' data-fresco-group="projects"><img
                        src="images/image_06.jpg" alt="image Image" /></a> </div>
            <div class="item"><a href="images/image_07.jpg" class='shadow fresco' data-fresco-group="projects"><img
                        src="images/image_07.jpg" alt="image Image" /></a> </div>

        </div>
    </div>

</section>

<!--end-->




<?php 
      include('./includes/footer.php')
    ?>




<script src="//code.tidio.co/5aisezb7i3yluhe2fp2y6rjzmv5jk4mk.js" async></script>
</body>

</html>