@extends('company.index')

@section('content')
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

    @include('company.features')

    @include('company.team')


@endsection

