@extends('company.index')

@section('content')
    <!-- inner page banner -->
    <section class="inner-page-banner">
        <div class="page-heading text-center">
            <h2>Contact</h2>
            <span class="section_1-breadcrumbs"><a href="{{ url('/') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/ Contact</span></span>
        </div>
    </section>
    <!-- //inner page banner -->

    <!-- contact -->
    <section class="contact py-5">
        <div class="container">
            <div class="heading pb-4">
                <h3 class="heading mb-2 text-center"> <span>Contact </span> Us </h3>
                <p class="para mb-5 text-center">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id.</p>
            </div>
            <div class="row contact-agileinfo">
                <div class="col-md-7 contact-right">
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="email" class="email" name="Email" placeholder="Email" required="">
                        <input type="text" name="Phone no" placeholder="Phone" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <div class="read mt-3">
                            <a href="#">Submit <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 mt-md-0 mt-5 contact-left">
                    <div class="address">
                        <h5>Address:</h5>
                        <p><span class="fa fa-home"></span>321 Block,4th Building, 2nd Street State 3489.</p>
                    </div>
                    <div class="address address-mdl">
                        <h5>Phones:</h5>
                        <p><span class="fa fa-phone"></span> +1(23) 4567 7890</p>
                        <p><span class="fa fa-mobile"></span>+1(23) 4567 7891</p>
                    </div>
                    <div class="address">
                        <h5>Email:</h5>
                        <p><span class="fa fa-envelope"></span> <a href="mailto:mail@example.com">mail@example.com</a></p>
                        <p><span class="fa fa-globe"></span> <a href="mailto:website@example.com">website@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agileits-w3layouts-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
    </section>
    <!-- //contact -->

    <!-- //contact -->
@endsection
