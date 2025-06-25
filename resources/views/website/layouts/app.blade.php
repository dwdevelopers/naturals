<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') |{{ config('app.name') }}</title>
    <meta name="description" content="Natural Agro & Tourism Marketing Multi-State Cooperative Society Ltd is a legally registered multi-state cooperative society operating under the Ministry of Cooperation, Government of India.">
    <meta name="keywords" content="accountant, finance, advisory, business, company, consulting, financial, money, corporate, invest, attorney, broker, office">
    <meta name="author" content="rudhisasmito.com">

    <!-- ==============================================
	Favicons
	=============================================== -->
    <link rel="shortcut icon" href="{{ asset('website/images/natural-favicon.png')}}">
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

    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/ss-custom.css')}}" />

    <script type="text/javascript" src="{{ asset('website/js/vendor/modernizr.min.js')}}"></script>
    <link href="https://db.onlinewebfonts.com/c/0a4a5e68b7929fb9a01c2b5533f79641?family=Zooja+Light+Pro" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
    <script type="text/javascript" src="{{ asset('website/js/vendor/testimonial.js')}}"></script>

    <!-- SENDMAIL -->
    <script type="text/javascript" src="{{ asset('website/js/vendor/validator.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('website/js/vendor/form-scripts.js')}}"></script>

    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>

    <script type="text/javascript" src="{{ asset('website/js/script.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        const dots = document.querySelectorAll('.dot');
        const slides = document.querySelectorAll('.slides-container li');

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const slideIndex = dot.getAttribute('data-slide');

                // Hide all slides
                slides.forEach(slide => slide.style.display = 'none');

                // Show the selected slide
                slides[slideIndex].style.display = 'block';

                // Update active class on dots
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
            });
        });
    </script>

    
</body>

</html>