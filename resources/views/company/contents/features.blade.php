@extends('company.index')

@section('content')
    <!-- inner page banner -->
    <section class="inner-page-banner">
        <div class="page-heading text-center">
            <h2>Features</h2>
            <span class="section_1-breadcrumbs"><a href="{{ url('/') }}"><i class="fa fa-home home_1"></i> Home</a> <span>/ Features</span></span>
        </div>
    </section>
    <!-- //inner page banner -->

    @include('company.features')

@endsection
