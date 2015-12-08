@extends('layouts.principal')

@section('content')
<div class="well well-default">

    <!-- Tabla para la visualizacion de granos de la especie dada -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
        	<ul class="list-group">
        		<h1 class="page-header">{{$region->descripcion}}</h1>
        	</ul>
        	<ul class="list-group">
        		@foreach($granos as $grano)
        		<li class="list-group-item">
        			{!! link_to_route('productoPdf', $title = $grano->variedad, $parameters = [$region->descripcion, $grano->variedad], $attributes = "")!!}
        		</li>
        		@endforeach
			</ul>
        </div>
    </div>
</div>
@endsection