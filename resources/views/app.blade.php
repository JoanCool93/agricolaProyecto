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
		                    <a href="Empresa">Empresa</a>
		                </li>
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
		                        </li>
		                        <li>
		                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
		                        </li>
		                        <li>
		                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
		                        </li>
		                        <li>
		                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
		                        </li>
		                        <li>
		                            <a href="portfolio-item.html">Single Portfolio Item</a>
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
		                <li class="dropdown">
		                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
		                    <ul class="dropdown-menu">
		                        <li>
		                            <a href="full-width.html">Full Width Page</a>
		                        </li>
		                        <li>
		                            <a href="sidebar.html">Sidebar Page</a>
		                        </li>
		                        <li>
		                            <a href="faq.html">FAQ</a>
		                        </li>
		                        <li>
		                            <a href="404.html">404</a>
		                        </li>
		                        <li>
		                            <a href="pricing.html">Pricing Table</a>
		                        </li>
		                    </ul>
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
