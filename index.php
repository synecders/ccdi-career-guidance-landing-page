<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<?php
include_once('./assets/includes/connection.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CCDI Sorsogon City</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php include_once('./assets/includes/navfixed.php'); ?>


    <div class="section section-header">
        <div class="parallax filter filter-color-blue">
            <div class="image" style="background-image: url('./assets/img/banner.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <!-- <p>Free Demo</p> -->
                        <!-- <h1 class="title-modern">Welcome!</h1> -->
                        <h2>Welcome!</h2>
                        <h2> to CCDI - Sorsogon!</h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg" target="_blank" class="btn btn-danger btn-fill btn-lg ">
                            Enroll Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Requirements for Enrolment:</h3>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>HS Report Card (F138) or Transcript of Record for Transferees.</li>
                        <li>Certificate of Good Moral Character.</li>
                        <li>Pictures:</li>
                        <ol>
                            <li type="a">1x1, color, 2 copies, blue background.</li>
                            <li type="a">2x2, color, 2 copies, blue background.</li>
                        </ol>
                        <li>NSO Birth Certificate (True Copy)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="title-area">
        <center>
            <h1>Services</h1>
        </center>
        <div class="separator separator-danger">✻</div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">
                <img style="background-size: cover" src="assets/img/Slides/1.jpg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="assets/img/Slides/2.jpg" alt="Chicago">
            </div>

            <div class="item">
                <img src="assets/img/Slides/3.jpg" alt="New York">
            </div>

            <div class="item">
                <img src="assets/img/Slides/4.jpg" alt="New York">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="fa fa-chevron-right glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('./assets/img/announcement.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Announcement</h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">We post all the announcement of the school in this area.</p>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">

                                    <?php include_once('./assets/includes/content.php'); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <!-- <h5 class="subtitle text-gray">Here are some</h5> -->
                <h2>CCDI Administrators</h2>
                <div class="separator separator-danger">✻</div>
            </div>

            <ul class="nav nav-text" role="tablist">
                <li class="active">
                    <a href="#testimonial1" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_5.jpg" />
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial2" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_6.jpg" />
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial3" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_2.jpg" />
                        </div>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">
                    <p class="description">
                        And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                    </p>
                </div>
                <div class="tab-pane" id="testimonial2">
                    <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                    </p>
                </div>
                <div class="tab-pane" id="testimonial3">
                    <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                    </p>
                </div>

            </div>

        </div>
    </div>

    <!-- 
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image" style="background-image: url('assets/img/office-1.jpeg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Do you want to work with us?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> We are keen on creating a second skin for anyone with a sense of style! We design our clothes having our customers in mind and we never disappoint!</p>
                </div>

                <div class="button-get-started">
                    <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div> -->


    <footer class="footer footer-small footer-color-black" data-color="black">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">Find offers</a>
                                </li>
                                <li>
                                    <a href="#">Discover Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-dribbble"></i> Dribbble
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 
            <hr> -->
            <div class="copyright">
                © <script>
                    document.write(new Date().getFullYear())
                </script> CCDI, Sorsogon City
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>