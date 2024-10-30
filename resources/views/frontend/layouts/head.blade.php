<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/logo_1.png') }}" />

    @yield('seo_data')


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    <!-- Template Stylesheet -->
    {{-- @if (App::getLocale() == 'en')
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @else --}}
    <link href="{{ asset('frontend/css/rtl.css') }}" rel="stylesheet">
    {{-- @endif --}}

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @stack('style')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    {{-- <style>
        .chaty-widget {
            position: fixed;
            z-index: 9999;
        }

        .chaty-widget.chaty-widget-show .chaty-widget-is {
            pointer-events: auto;
            overflow: visible;
            opacity: 1;
            visibility: visible;
        }

        .chaty-widget .chaty-widget-is {
            display: flex;
            z-index: 1111;
            flex-wrap: wrap;
            overflow: hidden;
            height: 0;
            position: absolute;
            pointer-events: none;
            left: 0;
            right: auto;
            bottom: 65px;
            opacity: 0;
        }
    </style> --}}
</head>
