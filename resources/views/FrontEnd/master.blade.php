<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOKCHO | @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('FrontEnd')}}/assect/img/logo/favicon.png" type="image/x-icon">
    @include('FrontEnd.include.style')

</head>

<body>
    <!-- Header Part Start -->
    @include('FrontEnd.include.header')
    <!-- Header Part End -->

    <!-- Body Part Start -->
    <main>
        @yield('content')
    </main>
    <!-- Body Part End -->

    <!-- Footer Start -->
    @include('FrontEnd.include.footer')
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-dark btn-square back-to-top display-tp"><i class="fa fa-arrow-up text-white"></i></a>
    <!-- End Back to Top -->
    @include('FrontEnd.include.script')
    @stack('js')
</body>

</html>
