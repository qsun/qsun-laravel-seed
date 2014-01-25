<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'qsun Laravel seed')</title>
    <script src="/assets/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/application.css" />
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Seed</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="/users/register">Register</a></li>
            <li><a href="/users/login">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    @if(Session::has('message'))
    <div class="container flash-message">
      <p class="alert alert-info">{{ Session::get('message') }}</p>
    </div>
    @endif

    @yield('content')
  </body>
</html>
