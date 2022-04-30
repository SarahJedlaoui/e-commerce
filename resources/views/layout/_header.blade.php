<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-comerce @yield('title')</title>

  <!-- Bootstrap core CSS -->
  
  <link href={{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} rel={{"stylesheet"}}>

  <!-- Custom styles for this template -->
  <link href={{ URL::asset('css/shop-homepage.css') }} rel={{"stylesheet"}}>
  <link href={{ URL::asset('css/parsley.css') }} rel={{"stylesheet"}}>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="index">
          <img src="coursel/logo.png" alt="" height="50px">
        </a>
      @if (Auth::check())
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu">
          <h5 class="dropdown-header">My Account</h5>
          <a class="dropdown-item" href="/user/{{ Auth::user()->name }}">Profile</a>
          <a class="dropdown-item" href="/user/{{ Auth::user()->name }}/posts">My posts</a>
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
      <a href="{{ route('register') }}" class="btn btn-primary">CREE COMPTE</a>
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
            <a class="nav-link" href="/shop">Shop</a>

          </li>
          <li class="nav-item {{ Request::is('') ? "active" : ""}}">
            <a href="/cart" class="nav-link">
              <i class="bi bi-bag" aria-hidden="true"></i>

              My Char
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
              </svg>
            
            </a>

          </li>
         @endif
         
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