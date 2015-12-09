@extends('layouts.principal')

@section('content')
<!--Contenido de la pagina -->
<div class="container">

    <!-- Encabezado de pagina -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Granos
                {{-- <small></small> --}}
            </h1>
            <!-- Patron  -->
            <ol class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="active">Granos</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-2">
			<!-- Tabla para la visualizacion de granos -->
        	<ul class="list-group page-header"><h3>Por especie</h3></ul>
        	<ul class="list-group">
        		@foreach($especies as $especie)
        		<li class="list-group-item">
        			{!! link_to_route('producto', $title = $especie->descripcion, $parameters = $especie->descripcion, $attributes = "")!!}
        		</li>
        		@endforeach
			</ul>
        	<ul class="list-group page-header"><h3>Por región</h3></ul>
        	<ul class="list-group">
        		<h4>Nacional</h4>
        		@foreach($regiones as $region)
        		@if($region->tipoRegion == 0)
        		<li class="list-group-item">
        			{!! link_to_route('region', $title = $region->descripcion, $parameters = $region->descripcion, $attributes = "")!!}
        		</li>
        		@endif
        		@endforeach
        	</ul>
        		<h4>Internacional</h4>
        		@foreach($regiones as $region)
        		@if($region->tipoRegion == 1)
        		<li class="list-group-item">
        			{!! link_to_route('region', $title = $region->descripcion, $parameters = $region->descripcion, $attributes = "")!!}
        		</li>
        		@endif
        		@endforeach
			</ul>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            @yield('contenido2')
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection