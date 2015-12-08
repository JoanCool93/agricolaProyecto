@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de renta -->
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
	        	{!! link_to('renta/create', $title = 'Agregar renta', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}
		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de rentas -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-1">Bodega:</th>
					<th class="col-lg-1">Rentada a:</th>
					<th class="col-lg-1">Durante(meses):</th>
					<th class="col-lg-1">Fecha de Renta:</th>
					<th class="col-lg-1">Fecha de termino:</th>
					<th class="col-lg-1">Importe:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($rentas as $renta)
				<tbody>
					<th class="col-lg-1">{{$renta->idRenta}}</th>
					<th class="col-lg-1">{{$renta->bodega->nombre}}</th>
					<th class="col-lg-1">{{$renta->usuario->nombre}}</th>
					<th class="col-lg-1">{{$renta->duracionMeses}}</th>
					<th class="col-lg-1">{{$renta->fechaInicio}}</th>
					<th class="col-lg-1">{{$renta->fechaTermino}}</th>
					<th class="col-lg-1">{{$renta->importe}}</th>
				</tbody>
				@endforeach
			</table>
			{!!$rentas->render()!!}
        </div>
    </div>
</div>

@endsection