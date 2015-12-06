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
		    <div class="navbar-brand">
		    	<a class="navbar-brand" href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Agricola Grain" align="top" height="30" width="80"></img></a>
		    </div>
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <!-- <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Agricola Grain" height="30" width="80"></img></a> -->
		        </div>
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar">
		                <li>
		                    <a href="../nuestraEmpresa">Empresa</a>
		                </li>
		                <li>
		                    <a href="/Productos">Productos</a>
		                </li>
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="../Bodegas">Renta de Bodegas</a>
		                        </li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="../Blog">Blog</a>
		                </li>
		                <li>
		                    <a href="../Contacto">Contacto</a>
		                </li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
						{{-- <li><a href="{{route('auth/register')}}">Registrarse</a></li> --}}
						{{-- <li><a href="{{route('usuario.login')}}">Iniciar Sesión</a></li> --}}
						<li><a href="{{route('usuario.create')}}">Registrarse</a></li>
				    @else
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->nombre }}<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        {{-- <li class="dropdown-header"></li> --}}
		                        {{-- <li role="separator" class="divider"></li> --}}
		                        <li>
		                            <a href="/perfilUsuario">Perfil</a>
		                        </li>
		                        <li>
		                            <a href="#">Pedidos</a>
		                        </li>
		                        <li>
		                            <a href="#">Modificar datos</a>
		                        </li>
		                        <li>
		                            <a href="{{route('logout')}}">Cerrar sesión</a>
		                        </li>
		                    </ul>
		                </li>
		                
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
	            <strong>Oops! Algo ha salido mal : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		        @endforeach
		    </ul>
		    </div>
			@endif
    	</div>
    	@include('alertas.exito')
        @include('alertas.fallo')
		@yield('content')
		@yield('scripts')

		<hr>
		<!-- Footer -->
	    <footer>
	        <div class="row">
	            <div class="col-lg-12" align="center">
	                <p>Copyright &copy; Agricola Noble Grain S.A. 2015</p>
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
