<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link href="css/app.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <a class="navbar-brand" href="#">Gestor de Pedidos</a>
	      <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </li>
            </ul>
          </li>

	      <div class="collapse navbar-collapse" id="navbarsExample01">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
	            <div class="dropdown-menu" aria-labelledby="dropdown01">
	              <a class="dropdown-item" href="#">Lista de Clientes</a>
	              <a class="dropdown-item" href="#">Crear Cliente</a>
	            </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
	            <div class="dropdown-menu" aria-labelledby="dropdown01">
	              <a class="dropdown-item" href="{{ url('/productos') }}">Lista de Productos</a>
	              <a class="dropdown-item" href="{{ url('/productos/create') }}">Crear Producto</a>
	              <a class="dropdown-item" href="{{ url('/categorias') }}">Lista de Categorías</a>
	              <a class="dropdown-item" href="{{ url('/categorias/create') }}">Crear Categoría</a>
	            </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedidos</a>
	            <div class="dropdown-menu" aria-labelledby="dropdown01">
	              <a class="dropdown-item" href="#">Lista de Pedidos</a>
	              <a class="dropdown-item" href="#">Crear Pedido</a>
	            </div>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
	            <div class="dropdown-menu" aria-labelledby="dropdown01">
	              <a class="dropdown-item" href="{{ url('/users') }}">Lista de Usuarios</a>
	              <a class="dropdown-item" href="#">Registrar Usuario</a>
	            </div>
	          </li>
	        </ul>
	      </div>
	    </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js7bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.js"></script>
    <script>
        $.material.init();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>