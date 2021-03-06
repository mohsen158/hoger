<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}"/>
    <script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.rtl.min.css') }}">

    <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>

    <style type="text/css" media="screen, print">
        @font-face {
            font-family: "KoodakBold";
            src: url(../font/KoodakBold.eot);
            src: url(../font/KoodakBold.eot?#iefix) format("embedded-opentype"), url(../font/KoodakBold.woff) format("woff"), url(../font/KoodakBold.ttf) format("truetype"), url(../font/Yekan.svg#BYekan) format("svg");
            font-weight: normal;
            font-style: normal
        }

        body {
            font-family: 'KoodakBold';
        }

        h3 {
            font-family: KoodakBold;
        }
    </style>
    <style>
        @import "http://fonts.googleapis.com/css?family=Lato:300";

        .hero {
            position: relative;
            width: 100%;
            height: 110vh;
            color: white;
            text-align: center;
            font-family: KoodakBold, sans-serif;
            font-weight: 300;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.4);
            border-bottom: solid 5px white;
        }

        .hero:before, .hero:after {
            position: absolute;
            display: block;
            top: 50%;
            left: 0;
            right: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .hero:before {

            font-size: 46px;
            line-height: 60px;
            margin-top: -40px;
        }

        .hero:after {
            font-size: 20px;
            line-height: 30px;
            margin-top: 20px;
        }

        .hero--intro:before {
        }

        .hero--intro:after {
        }

        .hero--intro {
            background: linear-gradient(135deg, #4567b2 20%, #8ab9ff 80%);
        }

        .hero--1 {
            background: linear-gradient(135deg, #76ad39 20%, #cdff8a 80%);
        }

        .hero--2 {
            background: linear-gradient(135deg, #b24592 20%, #f15f79 80%);
        }

        .hero--3 {
            background: linear-gradient(135deg, #432b58 20%, #734b6f 80%);
        }

        .hero--4 {
            background: linear-gradient(135deg, #904e95 20%, #e96450 80%);
        }

        .hero--5 {
            background: linear-gradient(135deg, #ff5f6d 20%, #ffc371 80%);
        }

        .hero--6 {
            background: linear-gradient(135deg, #ff9068 20%, #ff4b1f 80%);
        }

        .hero--7 {
            background: linear-gradient(135deg, #ffa000 20%, #ff5000 80%);
        }

        .hero--8 {
            background: linear-gradient(135deg, #b993d8 20%, #8ca6dc 80%);
        }

        .hero--9 {
            background: linear-gradient(135deg, #3ca55f 20%, #b5ac59 80%);
        }

        .hero--10 {
            background: linear-gradient(135deg, #2a99ef 20%, #52d9e5 80%);
        }

        .hero--11 {
            background: linear-gradient(135deg, #225e9e 20%, #712c69 80%);
        }

    </style>


</head>
<body style="background: linear-gradient(135deg, #ffa000 20%, #ff5000 80%);   ">


{{--<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0; background: white;">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}


{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"--}}
{{--data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}


{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--<!--{{ config('app.name', 'Laravel') }}-->--}}
{{--Hoger--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}

{{--<ul class="nav navbar-nav">--}}
{{--&nbsp;--}}
{{--</ul>--}}


{{--<ul class="nav navbar-nav navbar-right">--}}

{{--@if (Auth::guest())--}}
{{--<li><a href="{{ route('login') }}">Login</a></li>--}}
{{--<li><a href="{{ route('register') }}">Register</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--aria-expanded="false">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            <li><a href="http://wowslider.com"><img src="{{asset('data1/images/fekr2telegram.jpg')}}" alt="wow slider"
                                                    title="fekr2telegram" id="wows1_0"/></a></li>
        </ul>
    </div>
    <div class="ws_bullets">
        <div>
            <a href="{{asset('data1/images/fekr2telegram.jpg')}}" title="fekr2telegram"><span><img
                            src="data1/tooltips/fekr2telegram.jpg" alt="fekr2telegram"/>1</span></a>
            <a href="{{asset('data1/images/shabih.jpg')}}" title="shabih"><span>2</span></a>
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery slider</a> by
        WOWSlider.com v8.7
    </div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="{{asset('engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{asset('engine1/script.js')}}"></script>
<!-- End WOWSlider.com BODY section -->
<br>
@yield('content')

<div style=" position: fixed; bottom: 0; font-family: KoodakBold " class="ui  fluid  centered grid  menu      ">
    @if (Auth::guest())

        <a class="red item" href="{{ route('register') }}"> ثبت نام</a>
    @else
        <a class="red item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            خروج
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    <a href="/internet" class="orange item">اینترنت</a>
    <a href="{{route('foods')}}" class="orange item">منو</a>
        @endif
</div>
{{--<script  src="/js/app.js"></script>--}}
<!-- Scripts -->

</body>

</html>
