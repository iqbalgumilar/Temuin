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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/features') }}">Our Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/team') }}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
</div>
