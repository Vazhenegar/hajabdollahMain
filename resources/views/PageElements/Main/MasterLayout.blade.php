<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="حاج عبدالله, حاج عبدا..., پشمک حاج عبدالله, شرکت حاج عبدا...">
    <meta name="author" content="Iraj Azarvand <iraj.azarvand@hotmail.com>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    @if (app()->getLocale()=='fa')
        <link rel="stylesheet" href="{{asset('css/rtl/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/owl.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/magnific-popup.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/rtl/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl/responsive.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/ltr/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/owl.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ltr/magnific-popup.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/ltr/responsive.css')}}">
    @endif

    <link rel="stylesheet" href="{{asset('css/rtl/colors/main.css')}}" id="colors">
    <script src="{{asset('js/rtl/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>

@section('contents')
@show


<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ti-angle-up"></i> </a>
</div>

<script src="{{asset('js/rtl/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/rtl/bootstrap.min.js')}}"></script>
<script src="{{asset('js/rtl/popper.min.js')}}"></script>
<script src="{{asset('js/rtl/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/rtl/wow.min.js')}}"></script>
<script src="{{asset('js/rtl/scrollIt.min.js')}}"></script>
<script src="{{asset('js/rtl/waypoints.min.js')}}"></script>
<script src="{{asset('js/rtl/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/rtl/morphext.min.js')}}"></script>
<script src="{{asset('js/rtl/parallaxie.js')}}"></script>
<script src="{{asset('js/rtl/particles.min.js')}}"></script>
<script src="{{asset('js/rtl/setting.js')}}"></script>
<script src="{{asset('js/rtl/custom.js')}}"></script>
</body>
</html>

