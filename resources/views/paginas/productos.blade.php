@extends('layouts.principal')

@section('content')
<div class="well well-default">

    <!-- Tabla para la visualizacion de granos -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
        	<ul class="list-group">
        		<h1 class="page-header">Por especie</h1>
        	</ul>
        	<ul class="list-group">
        		@foreach($especies as $especie)
        		<li class="list-group-item">
        			{!! link_to_route('producto', $title = $especie->descripcion, $parameters = $especie->descripcion, $attributes = "")!!}
        		</li>
        		@endforeach
			</ul>
        </div>
        <div class="col-lg-8 col-md-12">
        	<ul class="list-group">
        		<h1 class="page-header">Por región</h1>
			</ul>
        	<div class="col-lg-6 col-md-12">
	        	<ul class="list-group">
	        		<h3 class="page-header">Nacional</h3>
	        		@foreach($regiones as $region)
	        		@if($region->tipoRegion == 0)
	        		<li class="list-group-item">
	        			{!! link_to_route('region', $title = $region->descripcion, $parameters = $region->descripcion, $attributes = "")!!}
	        		</li>
	        		@endif
	        		@endforeach
				</ul>
	        </div>
	        <div class="col-lg-6 col-md-12">
	        	<ul class="list-group">
	        		<h3 class="page-header">Internacional</h3>
	        		@foreach($regiones as $region)
	        		@if($region->tipoRegion == 1)
	        		<li class="list-group-item">
	        			{!! link_to_route('region', $title = $region->descripcion, $parameters = $region->descripcion, $attributes = "")!!}
	        		</li>
	        		@endif
	        		@endforeach
				</ul>
	        </div>
        </div>
    </div>
</div>
@endsection