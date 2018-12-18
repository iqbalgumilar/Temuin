<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Temuin</title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Temuin" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--// Meta tag Keywords -->

        <!-- banner slider css -->
        <link href="{{ url('/assets/flexart/css/minimal-slider.css') }}" rel='stylesheet' type='text/css' />
        <!-- //banner slider css -->

        <!-- css files -->
        <link rel="stylesheet" href="{{ url('/assets/flexart/css/bootstrap.css') }}"> <!-- Bootstrap-Core-CSS -->
        <link href="{{ url('/assets/flexart/css/style6.css') }}" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="{{ url('/assets/flexart/css/style.css') }}" type="text/css" media="all" /> <!-- Style-CSS -->
        <link rel="stylesheet" href="{{ url('/assets/flexart/css/fontawesome-all.css') }}"> <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

        <!--web font-->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <!--//web font-->

    </head>

    <body>

        <!-- header -->
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row mr-0">

                        <div class="col-lg-4">
                        </div>
                        <div class="col-md-3 col-4 sign-btn">
                            <a href="{{ url('/user/auth') }}">
                                <i class="fas fa-lock"></i> Sign In</a>
                        </div>
                        <div class="col-md-3 col-4 sign-btn">
                            <a href="{{ url('/user/register') }}">
                                <i class="fas fa-user"></i> Register</a>
                        </div>
                        <div class="search col-md-2 col-4">
                            <div class="mobile-nav-button">
                                <button id="trigger-overlay" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <!-- open/close -->
                            <div class="overlay overlay-door">
                                <button type="button" class="overlay-close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <form action="#" method="post" class="d-flex">
                                    <input class="form-control" type="search" placeholder="Search here..." required="">
                                    <button type="submit" class="btn btn-primary submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- open/close -->
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo">
                        <h1>
                            <a class="navbar-brand" href="index.html">
                                <i class="fab fa-cloudversify"></i> Temuin</a>
                        </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fas fa-bars"></i>
                        </span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="features.html">Our Features</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="about.html" title="">About Us</a>
                                    <a class="dropdown-item" href="projects.html" title="">Projects</a>
                                    <a class="dropdown-item" href="errorpage.html">404 error page</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.html">Team</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pricing Pages
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="pricing.html"> Default</a>
                                    <a class="dropdown-item" href="pricing_light.html"> Light Version</a>
                                    <a class="dropdown-item" href="pricing.html"> Dark Version</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>
        </div>
        <!-- header -->

        <!-- main image slider container -->
        <section class="slide-window">
            <div class="slide-wrapper" style="width:300%;">
                <div class="slide">
                    <div class="slide-caption text-center">
                        <h2 class="text-uppercase">Curriculum <span>Vitae</span></h2>
                        <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
                            gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia hasellus lacinia id erat culpa quis.</p>
                        <div class="read">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption text-center">
                        <h3 class="text-uppercase">Personal <span>Blog</span></h3>
                        <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
                            gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia hasellus lacinia id erat culpa quis.</p>
                        <div class="read">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption text-center">
                        <h3 class="text-uppercase">Name <span>Card</span></h3>
                        <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
                            gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia hasellus lacinia id erat culpa quis.</p>
                        <div class="read">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </section>
        <!-- end of main image slider container -->

        <!-- welcome -->
        <section class="Welcome py-5">
            <div class="container py-sm-5">
                <div class="welcome-grids row">
                    <div class="col-lg-6 mb-lg-0 mb-5">
                        <h3 class="mt-lg-4">Phasellus lacinia id erat.</h3>
                        <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
                            gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia</p>
                        <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla.</p>
                        <div class="read">
                            <a href="about.html">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 pr-1 welcome-image">
                        <img src="{{ url('/assets/flexart/images/a1.jpg') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 pl-1 welcome-image">
                        <img src="{{ url('/assets/flexart/images/a2.jpg') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- welcome -->

        <!-- welcome bottom -->
        <section class="Welcome-bottom">
            <div class="bs-slider-overlay">
                <div class="container">
                    <div class="welcome-bottom-grids row">

                        <!-- Counter -->
                        <div class="col-lg-6 p-sm-5 p-4 welcome_left Features-bottom">
                            <div class="layer p-sm-5 p-4 welcome_left_inner agile-info">
                                <div class="agileits_w3layouts_about_counter_left w3-agile-grid">
                                    <div class="countericon">
                                        <span class="fab fa-algolia" aria-hidden="true"></span>
                                        <h3>Projects</h3>
                                    </div>
                                    <div class="counterinfo agile-info">
                                        <p class="counter">436</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
                                    <div class="countericon">
                                        <span class="fab fa-asymmetrik" aria-hidden="true"></span>
                                        <h3>Awards Won</h3>
                                    </div>
                                    <div class="counterinfo agile-info">
                                        <p class="counter">147</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
                                    <div class="countericon">
                                        <span class="fas fa-bug" aria-hidden="true"></span>
                                        <h3>Professionals</h3>
                                    </div>
                                    <div class="counterinfo agile-info">
                                        <p class="counter">218</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- //Counter -->
                        <div class="col-lg-6 p-sm-5 p-4 mt-lg-5 mt-0 welcome_bottom_right">
                            <h3>Phasellus lacinia id erat eu. Nunc id ipsum</h3>
                            <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
                                gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia. gravida felis vitae. Phasellus lacinia id, sunt in culpa quis.</p>
                            <div class="read">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //welcome bottom -->

        <!-- Features -->
        <section class="features py-5">
            <div class="container py-sm-5">
                <div class="heading pb-4">
                    <h3 class="heading mb-2 text-center"> <span>Our </span> Features </h3>
                    <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
                </div>
                <div class="feature-grids row">
                    <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                        <div class="f1 p-sm-5 p-4">
                            <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            <h3 class="my-3">Curriculum Vitae</h3>
                            <p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                        <div class="f1 p-sm-5 p-4">
                            <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            <h3 class="my-3">Personal Blog</h3>
                            <p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                        <div class="f1 p-sm-5 p-4">
                            <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            <h3 class="my-3">Name Card</h3>
                            <p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //Features -->

        <!-- team -->
        <section id="myteam" class="team py-5">
            <div class="container py-md-5">
                <div class="heading pb-4">
                    <h3 class="heading mb-2 text-center"> <span>Our </span> Team </h3>
                    <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
                </div>
                <div class="row team-row">
                    <div class="col-md-4 col-sm-6 team-wrap">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="{{ url('/assets/flexart/images/team1.jpg') }}" alt="">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Mustakim</h6>
                            <span>web devloper</span>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-md-4 col-sm-6 team-wrap mt-sm-0 mt-5">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="{{ url('/assets/flexart/images/team3.jpg') }}" alt="">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Aunto Apu</h6>
                            <span>android devloper</span>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-md-4 col-sm-6 team-wrap mt-md-0 mt-5">
                        <div class="team-member last text-center">
                            <div class="team-img">
                                <img src="{{ url('/assets/flexart/images/team2.jpg') }}" alt="">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Jagir Alam</h6>
                            <span>Software engineer </span>
                        </div>
                    </div>
                    <!-- end team member -->
                </div>
            </div>
        </section>
        <!-- //team -->

        <!-- brands -->
        <section class="partners bg-light py-5">
            <div class="container">
                <div class="row partner-grids text-center">
                    <div class="col-md-2 col-4">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-angrycreative"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-apper"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-apple-pay"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-md-0 mt-3">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-aviato"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-md-0 mt-3">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-aws"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-md-0 mt-3">
                        <div class="brand bg-white">
                            <a href="#"><i class="fab fa-amazon-pay"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //brands -->

        <!-- footer -->
        <footer class="footer py-5">
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-top">
                        <h3 class="mb-4 pb-3 w3f_title">Subscribe Us</h3>
                        <p>By subscribing to our mailing list you will always get latest news, offers and updates from us.</p>
                        <form action="#" method="post">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
                            <div class="clearfix"> </div>
                        </form>

                    </div>
                    <div class="col-lg-2  col-md-6 footv3-left mt-md-0 mt-5">
                        <h3 class="mb-4 pb-3 w3f_title">Navigation</h3>
                        <ul class="list-agileits">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="projects.html">
                                    Projects
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="features.html">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <h3 class="mb-4 pb-3 w3f_title">Contact Us</h3>
                        <div class="fv3-contact">
                            <span class="fas fa-envelope-open mr-2"></span>
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="fv3-contact my-3">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>+1(23) 4567 7890</p>
                        </div>
                        <div class="fv3-contact">
                            <span class="fas fa-home mr-2"></span>
                            <p>321 Block,4th Building,
                                <br>2nd Street State 3489.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footerv2-w3ls mt-lg-0 mt-5">
                        <h3 class="mb-4 w3f_title pb-3">Get In Touch</h3>
                        <p>Excepteur sint occaecat non proident, sunt in culpa qui.</p>
                        <ul class="social-iconsv2 agileinfo mt-4">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //footer bottom -->
        </footer>
        <!-- //footer -->

        <!-- copyright -->
        <div class="cpy-right text-center">
            <p>© 2018 Temuin. All rights reserved | Design by
                <a href="http://w3layouts.com"> W3layouts.</a>
            </p>
        </div>
        <!-- //copyright -->

        <!-- video Modal Popup -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body video">
                        <iframe src="https://player.vimeo.com/video/33531612"></iframe>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //video Model Popup -->

        <!-- Vertically centered Modal -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Flex Art</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ url('/assets/flexart/images/bg.jpg') }}" class="img-fluid mb-3" alt="Modal Image" />
                        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
                        ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Vertically centered Modal -->

        <!-- js -->
        <script src="{{ url('/assets/flexart/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ url('/assets/flexart/js/bootstrap.js') }}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <!-- //js -->

        <!-- search overlay -->
        <script src="{{ url('/assets/flexart/js/modernizr-2.6.2.min.js') }}"></script>
        <!-- //search overlay -->

        <!--search jQuery-->
        <script src="{{ url('/assets/flexart/js/classie-search.js') }}"></script>
        <script src="{{ url('/assets/flexart/js/demo1-search.js') }}"></script>
        <!--//search jQuery-->

        <!-- dropdown nav -->
        <script>
            $(document).ready(function() {
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <!-- //dropdown nav -->

        <!-- banner slider js -->
        <script src="{{ url('/assets/flexart/js/minimal-slider.js') }}"></script>
        <!-- //banner slider js -->

        <!-- Stats-Number-Scroller-Animation-JavaScript -->
        <script src="{{ url('/assets/flexart/js/waypoints.min.js') }}"></script>
        <script src="{{ url('/assets/flexart/js/counterup.min.js') }}"></script>
        <script>
            jQuery(document).ready(function( $ ) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1000
                });
            });
        </script>
        <!-- //Stats-Number-Scroller-Animation-JavaScript -->

        <!-- start-smoth-scrolling -->
        <script src="{{ url('/assets/flexart/js/SmoothScroll.min.js') }}"></script>
        <script src="{{ url('/assets/flexart/js/move-top.js') }}"></script>
        <script src="{{ url('/assets/flexart/js/easing.js') }}"></script>
        <script>
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- here stars scrolling icon -->
        <script>
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                    };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- start-smoth-scrolling -->

    </body>
</html>
