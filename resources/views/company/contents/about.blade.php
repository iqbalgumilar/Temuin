@extends('company.index')

@section('content')
    <!-- inner page banner -->
    <section class="inner-page-banner">
        <div class="page-heading text-center">
            <h2>About Us</h2>
            <span class="section_1-breadcrumbs"><a href="{{ url('/') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/ About Us</span></span>
        </div>
    </section>
    <!-- //inner page banner -->

    <!-- welcome -->
    <section class="Welcome py-5">
        <div class="container py-sm-3">
            <div class="heading pb-4">
                <h3 class="heading mb-2 text-center"> <span>About </span> Us </h3>
                <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
            </div>
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

    <!-- what we do -->
    <section class="Welcome py-5">
        <div class="container py-sm-3">
            <div class="heading pb-4">
                <h3 class="heading mb-2 text-center"> <span>What </span> We Do </h3>
                <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{ url('/assets/flexart/images/3.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 about-right mt-lg-0 mt-5">
                    <h3>what we do</h3>
                    <h4>qui dolorem Lorem int</h4>
                    <p class="my-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit. </p>
                    <!--/about-in-->
                    <div class="row">
                        <div class="col-sm-6 about-in text-left">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-anchor"></i>
                                    <h5 class="card-title"> Branch 1</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 about-in text-left">
                            <div class="card">
                                <div class="card-body">
                                    <i class="far fa-map"></i>
                                    <h5 class="card-title"> Branch 2</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/about-in-->
                </div>
            </div>
        </div>
    </section>
    <!-- what we do -->

    <!-- /Features -->
    <section class="banner-bottom py-lg-5 py-md-5 py-3" id="Features">
        <div class="container">
            <div class="inner-sec py-lg-5 py-3">
                <div class="heading pb-4">
                    <h3 class="heading mb-2 text-center"> <span>Work </span> With Us </h3>
                    <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
                </div>
                <div class="row middle-grids">
                    <div class="col-lg-3 col-sm-6 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-key mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Clean Layout</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-md-0 mt-3 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-building mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Best Designs</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-map-marker mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Planning</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 about-in middle-grid-info active text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-calculator mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Success</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Features -->
@endsection



