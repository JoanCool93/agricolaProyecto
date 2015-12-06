@extends('layouts.principal')

@section('content')
<div class="well well-default">

    <!-- Tabla para la visualizacion de granos -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
        	<ul class="list-group">
        		<li class="list-group-item">
        			Por especie
        		</li>
        	</ul>
        	<ul class="list-group">
        		@foreach($especies as $especie)
        		<li class="list-group-item">
        			{!! link_to($especie->descripcion, $title = $especie->descripcion, $attributes = "")!!}
        		</li>
        		@endforeach
			</ul>
        </div>
        <div class="col-lg-8 col-md-12">
        	<ul class="list-group">
        		<li class="list-group-item">
        			Por Región
        		</li>
			</ul>
        	<div class="col-lg-6 col-md-12">
	        	<ul class="list-group">
	        		<li class="list-group-item">
	        			Nacional
	        		</li>
	        		@foreach($regiones as $region)
	        		@if($region->tipoRegion == 0)
	        		<li class="list-group-item">
	        			{!! link_to('productos/', $title = $region->descripcion, $attributes = "")!!}
	        		</li>
	        		@endif
	        		@endforeach
				</ul>
	        </div>
	        <div class="col-lg-6 col-md-12 col-sm-8">
	        	<ul class="list-group">
	        		<li class="list-group-item">
	        			Internacional
	        		</li>
	        		@foreach($regiones as $region)
	        		@if($region->tipoRegion == 1)
	        		<li class="list-group-item">
	        			{!! link_to('productos/', $title = $region->descripcion, $attributes = "")!!}
	        		</li>
	        		@endif
	        		@endforeach
				</ul>
	        </div>
        </div>
    </div>
</div>
@endsection