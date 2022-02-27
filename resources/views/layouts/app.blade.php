<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         @yield('title')

            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Web Fonts  -->
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

            <!-- Vendor CSS -->
            <link rel="stylesheet" href="public/vendor/bootstrap/bootstrap.css">
            <link rel="stylesheet" href="public/vendor/fontawesome/css/font-awesome.css">
            <link rel="stylesheet" href="public/vendor/owlcarousel/owl.carousel.min.css" media="screen">
            <link rel="stylesheet" href="public/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
            <link rel="stylesheet" href="public/vendor/magnific-popup/magnific-popup.css" media="screen">

            <!-- Theme CSS -->
            <link rel="stylesheet" href="public/css/theme.css">
            <link rel="stylesheet" href="public/css/theme-elements.css">
            <link rel="stylesheet" href="public/css/theme-blog.css">
            <link rel="stylesheet" href="public/css/theme-shop.css">
            <link rel="stylesheet" href="public/css/theme-animate.css">

            <!-- Current Page CSS -->
            <link rel="stylesheet" href="public/vendor/rs-plugin/css/settings.css" media="screen">
            <link rel="stylesheet" href="public/vendor/circle-flip-slideshow/css/component.css" media="screen">

            <!-- Skin CSS -->
            <link rel="stylesheet" href="public/css/skins/default.css">

            <!-- Theme Custom CSS -->
            <link rel="stylesheet" href="public/css/custom.css">

            <!-- Head Libs -->
            <script src="public/vendor/modernizr/modernizr.js"></script>

            <!--[if IE]>
                <link rel="stylesheet" href="public/css/ie.css">
            <![endif]-->

            <!--[if lte IE 8]>
                <script src="public/vendor/respond/respond.js"></script>
                <script src="public/vendor/excanvas/excanvas.js"></script>
            <![endif]-->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('css')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="body">
                 @include('parts.header')

                 @yield('content')

                 @include('parts.footer')

                 @stack('js')
        </div>
</body>
</html>
