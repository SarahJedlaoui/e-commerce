<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>E-comerce @yield('title')</title>

<!-- Bootstrap core CSS -->
<link href= {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} rel={{"stylesheet"}}>

<!-- Custom styles for this template -->
<link href={{ URL::asset('css/shop-homepage.css') }} rel={{"stylesheet"}}>
<link href={{ URL::asset('css/parsley.css') }} rel={{"stylesheet"}} >

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      @if (Auth::check())
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Account
        </button>
        <div class="dropdown-menu">
          <h5 class="dropdown-header">Profile</h5>
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">My posts</a>
          <a class="dropdown-item" href="#">Link 3</a>
          <h5 class="dropdown-header">Connexion</h5>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
      @else 
     
      <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
      <a href="{{ route('register') }}" class="btn btn-primary" style="margin-left: 10px;">cree votre compte</a>

      @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @if (Auth::check())
          <li class="nav-item {{ Request::is('index') ? "active" : ""}}">
            <a class="nav-link" href="/index">Home

            </a>
          </li>
          <li class="nav-item {{ Request::is('about') ? "active" : ""}}">
            <a class="nav-link" href="pro">Prouduits</a>

          </li>
         @endif
          <li class="nav-item {{ Request::is('about') ? "active" : ""}}">
            <a class="nav-link" href="about">About</a>

          </li>
          <li class="nav-item {{ Request::is('services') ? "active" : ""}}">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? "active" : ""}}">
            <a class="nav-link" href="contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src={{ URL::asset('vendor/jquery/jquery.min.js') }}></script>
  <script src={{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ URL::asset('js/parsley.min.js') }}></script>
</body>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; E-commerce 2022</p>
    </div>
    <!-- /.container -->
  </footer>
</html>
