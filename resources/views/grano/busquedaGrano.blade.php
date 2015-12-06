@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de grano -->
    <div class="row">
        <div class="col-lg-9">
	        <div class="col-lg-5">
	        	<div class="form-group">
	                {!! Form::label ('Buscar por ID:') !!}
	                {!! Form::email('correoElectronico', '', ['class'=> 'form-control', 'placeholder' => 'Ingrese Id a buscar']) !!}
	            </div>
	        </div>
	        <div class="col-lg-5">
	        	<div class="form-group">
	                {!! Form::label ('Buscar por Apellido:') !!}
	                {!! Form::email('correoElectronico', '', ['class'=> 'form-control', 'placeholder' => 'Ingrese apellido a buscar']) !!}
	            </div>
	        </div>
	        <div class="col-lg-2"  align="center">
				{!! link_to('grano/create', $title = 'Agregar grano', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de granos -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-2">Especie:</th>
					<th class="col-lg-2">Variedad:</th>
					<th class="col-lg-1">Estado grano:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($granos as $grano)
				<tbody>
					<th class="col-lg-1">{{$grano->id}}</th>
					<th class="col-lg-2">{{Especie::find($grano->especie)}}</th>
					<th class="col-lg-2">{{$grano->variedad}}</th>
					<th class="col-lg-1">{{$grano->costo}}</th>
					<th class="col-lg-1">
						{!! link_to_route('grano.show', $title = 'Mostrar', $parameters = $grano->id, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
					</th>
					<th class="col-lg-1">
						{!! link_to_route('grano.edit', $title = 'Modificar', $parameters = $grano->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						{!! Form::open(['route' => ['grano.destroy', $grano->id], 'method' => 'DELETE']) !!}
                        <div>
                            {!! Form::submit('Eliminar',['class' => 'btn btn-danger fa fa-trash-o']) !!}
                        </div>
                    	{!! Form::close() !!}
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$granos->render()!!}
        </div>
    </div>
</div>

@endsection