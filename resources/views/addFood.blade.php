<!DOCTYPE html>

<?php
    $name = null;
    $details = null;
?>

<html>
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Laravel Quickstart - Intermediate</title>

  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

  <style>
      body {
          font-family: 'Lato';
      }

      .fa-btn {
          margin-right: 6px;
      }

      #box {
          width: 400px;
          overflow: auto;
          padding: 2px;
          text-align: justify;
          background: white;

          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      .highlight {
          color:#888;
      }


      .pclass{
           width: 175px;
          height: 175px;
      }
      .image-circle{
          border-radius: 50%;
          width: 175px;
          height: 175px;
          border: 4px solid #FFF;
          margin: 10px;
      }

  </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Little Store
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{ url('/addkala') }}">Add Product</a></li>
                    <li><a href="{{ url('/') }}">Home Page</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                     <li><a href="{{ url('/cartpage') }}">Cart</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Product
            </div>
            <div class="panel-body">


    <form action="/insertfood" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="details" value="">

        <div class="row col-md-12">

            <label class="col-md-2 control-label">Product Name</label>
            <!--<div  class="unselectable col-md-10">
                <p contenteditable="true" class="col-md-9 form-control cont" style="width:100%;  height:100%;">

                </p>
            </div>-->
            <div class="col-md-6">
                <input  class="input-md form-control" name="name" value="{{ $name }}">
            </div>

            <input class="col-md-4 btn btn-default" type="file" name="photo" id="photo" >
        </div>

        <div class="row col-md-offset-2 col-md-3 form-group">
            <label class="control-label col-md-4">Font-family</label>
            <select id="font" class="col-md-4 form-control">
                <option value="Arial">Arial</option>
                <option value="Amazon">Amazon</option>
            </select>
            <button type="button" onclick="alaki();" id="btn" class="form-group btn btn-info col-md-6">
                Change Font
            </button>
        </div>

        <div class="row col-md-offset-1 col-md-1">
            <button type="button" class="btn-link form-control" onclick="bold()" style="font-size: x-large; color: #880000">
                Bold
            </button>
        </div>

        <div class="row col-md-offset-2 col-md-3 form-group">
            <label id="size" class="control-label col-md-4">Font-color</label>
            <select id="color" class="col-md-8 form-control">
                <option value="black">Black</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
            </select>
            <button type="button" onclick="size();" id="btn" class="form-group btn btn-info col-md-7">
                Change Font-color
            </button>
        </div>

        <div  class="row col-md-12">
            <label  class="col-md-2 control-label">Product Description</label>
            <div class="unselectable col-md-10">
                <p class="col-md-9 form-control conttext" contenteditable="true" style="width:100%;  height:100%;"></p>
            </div>
        </div>

        <button class="btn btn-info col-md-offset-11" onclick="getval();">
            Submit
        </button>
    </form>

</div>
            </div>
        </div>
        </div>


        <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
</html>
