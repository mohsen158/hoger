<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>    body {
                animation: colorchange 50s; /* animation-name followed by duration in seconds*/
                /* you could also use milliseconds (ms) or something like 2.5s */
                -webkit-animation: colorchange 50s; /* Chrome and Safari */
            }

            @keyframes colorchange
            {
                0%   {background: red;}
                25%  {background: yellow;}
                50%  {background: blue;}
                75%  {background: green;}
                100% {background: red;}
            }

            @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
            {
                0%   {background: red;}
                25%  {background: yellow;}
                50%  {background: blue;}
                75%  {background: green;}
                100% {background: red;}
            }</style>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hoger
                </div>

                <div class="links">
                    <a href="/hoger/foods">Foods</a>
                    <a href="/hoger/foods/{ foodid }">Laracasts</a>
                    <a href="https://laravel-news.com">Contact Us</a>
                    <a href="https://forge.laravel.com">About Us</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
