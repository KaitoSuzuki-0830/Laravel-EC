<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css')}}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css')}}">

    <!--Styles for RTL-->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

@include('includes.header')


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')
</div>

<!-- Footer -->

@include('includes.footer')



<script src="{{ asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('app/js/theme-plugins.js')}}"></script>
<script src="{{ asset('app/js/main.js')}}"></script>
<script src="{{ asset('app/js/form-actions.js')}}"></script>

<script src="{{ asset('app/js/velocity.min.js')}}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js')}}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success')}}")
        @endif
    </script>
<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
