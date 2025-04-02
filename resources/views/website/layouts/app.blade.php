<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') |{{ config('app.name') }}</title>
    <meta name="description" content="Finanzi template exclusively build for finance, accounting, financial and business planning. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="accountant, finance, advisory, business, company, consulting, financial, money, corporate, invest, attorney, broker, office">
    <meta name="author" content="rudhisasmito.com">

    <!-- ==============================================
	Favicons
	=============================================== -->
    <link rel="shortcut icon" href="{{ asset('website/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{ asset('website/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('website/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('website/images/apple-touch-icon-114x114.png')}}">

    <!-- ==============================================
	CSS VENDOR
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/vendor/bootstrap-dropdownhover.min.css')}}">

    <!-- ==============================================
	Custom Stylesheet
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/style.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css')}}"/>

    <script type="text/javascript" src="{{ asset('website/js/vendor/modernizr.min.js')}}"></script>

</head>

<body>

    <!-- LOAD PAGE -->
    <div class="animationload">
        <div class="loader"></div>
    </div>

    <!-- BACK TO TOP SECTION -->
    <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

    @include('website.layouts.header')

    @yield('content')

    <!-- FOOTER SECTION -->
    @include('website.layouts.footer')
    @stack('scripts')
    <!-- JS VENDOR -->
    <script type="text/javascript" src="{{ asset('website/js/vendor/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/jquery.superslides.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/bootstrap-dropdownhover.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/imagesloaded.pkgd.min.js')}}"></script>


    <!-- SENDMAIL -->
    <script type="text/javascript" src="{{ asset('website/js/vendor/validator.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/form-scripts.js')}}"></script>

    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>

    <script type="text/javascript" src="{{ asset('website/js/script.js')}}"></script>


</body>
</html>
