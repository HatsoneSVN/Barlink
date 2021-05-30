<?php 
use Illuminate\Support\Facades\Auth; 
$nombre = Auth::user()->name;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Barlink</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Styles -->
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
		<!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>		
		<!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style_propio.css') }}"/>
	<div class="container-menu">
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<!-- header -->
			<header>
				<!-- navigation -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" id="logo" href="{{ url('/') }}"><span id="titleApp">Barlink</span></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{ url('/') }}">Inicio</a></li>
								<li><a href="{{ url('/categorias' , ['categoria' => 'DESTACADOS']) }}">Destacados</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/categorias' , ['categoria' => 'ASEQUIBLE']) }}">Más asequibles</a></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'EXCLUSIVO']) }}">Más exclusivos</a></li>
										<li class="divider"></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'japones']) }}">Japones</a></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'mediterraneo']) }}">Mediterraneo</a></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'italiano']) }}">Italiano</a></li>
										<li class="divider"></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'bar']) }}">Bar</a></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'pub']) }}">Pub</a></li>
										<li><a href="{{ url('/categorias' , ['categoria' => 'RESTAURANTE']) }}">Restaurante</a></li>
										<li class="divider"></li>
									</ul>
								</li>
								<li><a href="#contact">Contacto</a></li>
								<li><a href="{{ url('/logout') }}">Cerrar sesión</a></li>
								<li><a href="#"> | {{$nombre}}</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>