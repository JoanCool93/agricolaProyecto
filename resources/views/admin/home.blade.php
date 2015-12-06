@extends('layouts.principal')

@section('content')
{{-- @include('alertas.exito') --}}
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url({{ asset('images/carrousel1.jpg') }});"></div>
            <div class="carousel-caption">
                <!-- <h2>Cultivo responsable</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url({{ asset('images/carrousel2.jpg') }});"></div>
            <div class="carousel-caption">
                <!-- <h2>Cultivo responsable</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url({{ asset('images/slide1.jpg') }});"></div>
            <div class="carousel-caption">
                <!-- <h2>Tierras fertiles</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url({{ asset('images/slide2.jpg') }});"></div>
            <div class="carousel-caption">
                <!-- <h2>Cultivo responsable</h2> -->
            </div>
        </div>
        <div class="item">
            <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div> -->
            <div class="fill" style="background-image:url({{ asset('images/slide3.jpg') }});"></div>
            <div class="carousel-caption">
                <!-- <h2>Solo los mejores granos</h2> -->
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container" id= "empresa">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenidos a Agricola Grain
            </h1>
        </div>
        <div class="col-lg-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>   
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Lo más nuevo</h2>
        </div>
        <div class="col-md-6">
            <p>Café colombiano</p>
            <ul>
                <li><strong>Bootstrap v3.2.0</strong>
                </li>
                <li>jQuery v1.11.0</li>
                <li>Font Awesome v4.1.0</li>
                <li>Working PHP contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
                <li>17 HTML pages</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="{{ asset('images/nuevo.jpg') }}" alt="">
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Nuestra empresa</h2>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-question"></i> Reseña Histórica</h4>
                </div>
                <div class="panel-body">
                    <p>Agrícola Noble Grain S.A. es una sociedad que se constituyó en  marzo de 1992, desde entonces se ha dedicado a la explotación de productos agrícolas, mediante la implementación de siembras, operación de cultivos y la comercialización de sus respectivos productos.
                    En el transcurso de todos estos años, la Agricola Noble Grain S.A., ha estado gestionada bajo un modelo de evaluaciones de cultivos de frutas tropicales, por ello ha estado en negocios como los lichis o litchis, la macadamia, la guanábana, la mora de castilla, la manzana Ana, los brevos, el mango, los mangostinos, las atemoyas,  la piña, el maracuyá entre otros.</p>
                    <a href="/nuestraEmpresa" class="btn btn-default">Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-road"></i> Misión</h4>
                </div>
                <div class="panel-body">
                    <p>En Agrícola Grain producimos y comercializamos frutas tropicales para atender a los diferentes mercados que demandan fruta en fresco. En el cumplimiento de nuestro objeto, practicamos una agricultura moderna acompañada con gestión gerencial y comercial, aplicación de buenas prácticas agrícolas, sostenibilidad y buscando siempre la rentabilidad de cada operación que permita maximizar el desarrollo y supervivencia de la empresa, sus empleados, proveedores, acreedores y accionistas, mediante la satisfacción de sus Clientes.</p>
                    <a href="/nuestraEmpresa" class="btn btn-default">Conozcanos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Visión</h4>
                </div>
                <div class="panel-body">
                    <p>Agrícola Grain será en el año 2018 una organización orientada en un alto grado a la agro-exportación con productos producidos y certificados en buenas prácticas agrícolas, dirigido bajo un modelo de gestión empresarial que genere un balance social y económico altamente positivo, y accionistas satisfechos por el adecuado nivel de retorno de su inversión.</p>
                    <a href="/nuestraEmpresa" class="btn btn-default">Conózcanos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Seccion de productos y servicios-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Granos</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/grano1.jpg') }}" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/grano2.jpg') }}" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/grano3.jpg') }}" alt="">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Servicios</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/bodegas1.jpg') }}" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/bodegas2.jpg') }}" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="{{ asset('images/bodegas3.jpg') }}" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div>

    <hr>

</div>
<!-- /.container -->

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
	interval: 5000 //changes the speed
})
</script>
@endsection