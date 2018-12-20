<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Temuin</title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Temuin" />

        @include('company.head')

    </head>

    <body>

        <!-- header -->
        @include('company.header')
        <!-- header -->

        <!-- content -->
        @yield('content')
        <!-- content -->

        @include('company.brands')

        <!-- footer -->
        @include('company.footer')
        <!-- //footer -->

        <!-- copyright -->
        @include('company.copyright')
        <!-- //copyright -->

        <!-- Javascript -->
        @include('company.javascript')
        <!-- //Javascript -->

    </body>
</html>
