<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/components.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/icons.css') }}" " />
        <link rel="stylesheet" href="{{ asset('css/responsee.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('owl-carousel/owl.carousel.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('owl-carousel/owl.theme.css') }}"
        />
        <!-- CUSTOM STYLE -->
        <link rel="stylesheet" href="{{ asset('css/template-style.css') }}" />
        <link
            href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext"
            rel="stylesheet"
            type="text/css"
        />
        <script
            type="text/javascript"
            src="{{ asset('js/jquery-1.8.3.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('js/jquery-ui.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('js/validation.js') }}"
        ></script>
    </head>
    <body>
    <!-- header / navbar  -->
    @include('master.header') 
    <!-- content child -->
    @yield('content')
    <!-- footer -->
    @include('master.footer') 
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
    </body>
</html>
