@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de especies -->
    <div class="row">
        <div class="col-lg-9">
	        <div class="col-lg-5">
	        	<div class="form-group form-horizontal">
	                {!! Form::label ('Buscar por descripción:') !!}
	                {!! Form::input('text', 'desscripcion', '', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la especie a buscar']) !!}
	            </div>
	        </div>
	        <div class="col-lg-7"  align="right">
	        	{!! link_to('especie/create', $title = 'Agregar especie', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}
		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de especies -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-2">Id:</th>
					<th class="col-lg-7">Descripción:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($especies as $especie)
				<tbody>
					<th class="col-lg-2">{{$especie->id}}</th>
					<th class="col-lg-7">{{$especie->descripcion}}</th>
					
					<th class="col-lg-2">
						{!! link_to_route('especie.edit', $title = 'Modificar', $parameters = $especie->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						@include('especie.forms.modalEliminar')
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$especies->render()!!}
        </div>
    </div>
</div>

@endsection