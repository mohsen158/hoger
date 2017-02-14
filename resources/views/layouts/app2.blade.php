<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="../semantic/dist/semantic.min.js"></script>
    <style>
        @import "http://fonts.googleapis.com/css?family=Lato:300";
        .hero {
            position: relative;
            width: 100%;
            height: 110vh;
            color: white;
            text-align: center;
            font-family: Lato, sans-serif;
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

    <style>
        body {
            font-family: 'Tahoma';
        }
    </style>
</head>
<body   style="background: linear-gradient(135deg, #ffa000 20%, #ff5000 80%);">

    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0; background: white;">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    Hoger
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>


                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div style="background: url('../foodpic/capture.JPG'); height: 220px;">
        <div class="ui container">
            <div class="ui centered column">
                <h1 style="margin: auto;">fasfasf</h1>
            </div>
        </div>
    </div>

    @yield('content')


<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
