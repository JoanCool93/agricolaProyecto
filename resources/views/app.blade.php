<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
	    <meta name="author" content="">
		<title>Agricola Grain</title>

		{!! Html::style('assets/css/bootstrap.css') !!}
		{!! Html::style('assets/estilosPropios.css') !!}
		{!! Html::style('assets/css/modern-business.css') !!}
		{!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="/">Agricola Grain</a>
		        </div>
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar">
		                <li>
		                    <a href="AcercaDe">Empresa</a>
		                </li>
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li class="dropdown-header">Por Especie</li>
		                        <li role="separator" class="divider"></li>
		                        <li>
		                            <a href="/Producto/Tomate">Tomate</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Pepino">Pepino</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Chile">Chile</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Melon">Melon</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Sandia">Sandia</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Frijol">Frijol</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Garbanzo">Garbanzo</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Maiz">Maiz</a>
		                        </li>
		                        <li>
		                            <a href="/Producto/Cafe">Cafe</a>
		                        </li>
		                        <li role="separator" class="divider"></li>
		                        <li class="dropdown-header">Por Region</li>
		                        <li role="separator" class="divider"></li>
		                        <li>
		                            <a href="/Region/Mexico">México</a>
		                        </li>
		                        <li>
		                            <a href="/Region/EEUU">EEUU</a>
		                        </li>
		                        <li>
		                            <a href="/Region/Centroamerica">Centroamerica</a>
		                        </li>
		                        <li>
		                            <a href="/Region/Suramerica">Suramerica</a>
		                        </li>
		                        <li>
		                            <a href="/Region/MedioOriente">Medio Oriente</a>
		                        </li>
		                    </ul>
		                </li>
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="Bodegas">Renta de Bodegas</a>
		                        </li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="Blog">Blog</a>
		                </li>
		                <li>
		                    <a href="Contacto">Contacto</a>
		                </li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('auth/login')}}">Login</a></li>
						<li><a href="{{route('auth/register')}}">Register</a></li>
				    @else
		                <li>
		                    <a href="#">{{ Auth::user()->name }}</a>
		                </li>
		                <li><a href="{{route('auth/logout')}}">Logout</a></li>
		                
			        @endif
					</ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container -->
		</nav>
		<div class="container">
               @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		        @endforeach
		    </ul>
		    </div>
			@endif
    	</div>
		@yield('content')

		<!-- Footer -->
	    <footer>
	        <div class="row">
	            <div class="col-lg-12">
	                <p>Copyright &copy; Agricola Grain 2015</p>
	            </div>
	        </div>
	    </footer>
		<!-- Scripts -->

		<!-- jQuery -->
        {!! Html::script('assets/js/jquery.js') !!}

        <!-- Bootstrap Core JavaScript -->
        {!! Html::script('assets/js/bootstrap.min.js') !!}
	</body>
</html>
