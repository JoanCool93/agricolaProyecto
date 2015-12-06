@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de bodega -->
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
	        	{!! link_to('bodega/create', $title = 'Agregar bodega', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}
		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de bodegas -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-2">Nombre:</th>
					<th class="col-lg-2">Costo mensual:</th>
					<th class="col-lg-1">Estado Bodega:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($bodegas as $bodega)
				<tbody>
					<th class="col-lg-1">{{$bodega->id}}</th>
					<th class="col-lg-2">{{$bodega->nombre}}</th>
					<th class="col-lg-2">{{$bodega->costoMensual}}</th>
					@if($bodega->estadoBodega == 0)
                        <th class="col-lg-1">Disponible</th>
                    @elseif($bodega->estadobodega == 1)
                        <th class="col-lg-1">Rentada</th>
                    @elseif($bodega->estadobodega == 2)
                        <th class="col-lg-1">Mantenimiento</th>
                    @endif
					<th class="col-lg-1">
						{!! link_to_route('bodega.show', $title = 'Mostrar', $parameters = $bodega->id, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
					</th>
					<th class="col-lg-1">
						{!! link_to_route('bodega.edit', $title = 'Modificar', $parameters = $bodega->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						{!! Form::open(['route' => ['bodega.destroy', $bodega->id], 'method' => 'DELETE']) !!}
                        <div>
                            {!! Form::submit('Eliminar',['class' => 'btn btn-danger fa fa-trash-o']) !!}
                        </div>
                    	{!! Form::close() !!}
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$bodegas->render()!!}
        </div>
    </div>
</div>

@endsection