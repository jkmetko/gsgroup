<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>GS Group - všetko pre gastro</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}"/>

    <!-- CSS Files -->

    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/player/YTPlayer.css') }}" />

    @yield('styles')

    <!-- End CSS Files -->

</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

<div id="pageloader" class="colored-bg-sepia">
    <div class="loader-item">
        <img src="{{ asset('assets/images/loader.gif') }}" alt='loader' />
    </div>
</div>

<!-- Home Section -->
<section id="home" class="">
    <!-- Header Social Section -->
    @include('sections.header-social')

    <!-- Navigation Section -->
    @include('sections.navigation')

    <!-- Rev Slider -->
    @include('sections.rev_slider')

    <!-- Header Textarea Area -->
    @include('sections.header-textarea')

</section>
<!-- End Home Section -->

@yield('content')

<!--Contact Section -->
@include('sections.contact')

<!-- Footer Section -->
@include('sections.footer')

<!-- Back To Top Button -->
<section id="back-top">
    <a href="#home" class="scroll"></a>
</section>
<!-- End Back To Top Button -->

<!-- JS Files -->

<script type="text/javascript" src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/modernizr-latest.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.superslides.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/rev-slider/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mb.YTPlayer.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- End JS Files -->

@yield('scripts')

</body>

</html>