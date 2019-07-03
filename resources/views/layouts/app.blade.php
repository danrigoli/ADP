<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="img/fav.png">
       <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="UTF-8">
        <title>Almacen De Pizzas</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="{{asset('css/home.css')}}" rel="stylesheet">
		<script src="{{asset('js/home.js')}}"></script>
		@yield('assets')
    </head>
<body> 
    <div id="wrapper" class="animate">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand"><img src="{{asset('img/logo.png')}}" style="width:20%;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
          <a class="nav-link" href="{{route('wunderman')}}">Menu
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @if (Auth::User())
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Mi orden</a>
          </li> 
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrarse</a>
          </li> 
          @endif
        </ul>
      </div>
    </nav>
@yield('content')
    </div>
</body>
</html>