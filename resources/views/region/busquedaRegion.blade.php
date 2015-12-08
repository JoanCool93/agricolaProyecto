@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de regions -->
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
	        	{!! link_to('region/create', $title = 'Agregar región', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}
		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de regions -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-4">Descripción:</th>
					<th class="col-lg-4">Tipo región:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($regiones as $region)
				<tbody>
					<th class="col-lg-1">{{$region->id}}</th>
					<th class="col-lg-4">{{$region->descripcion}}</th>
					@if($region->tipoRegion == 0)
                        <th class="col-lg-4">Nacional</th>
                    @elseif($region->tipoRegion == 1)
                        <th class="col-lg-4">Internacional</th>
                    @endif
					<th class="col-lg-1">
						{!! link_to_route('region.show', $title = 'Mostrar', $parameters = $region->id, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
					</th>
					<th class="col-lg-1">
						{!! link_to_route('region.edit', $title = 'Modificar', $parameters = $region->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						@include('region.forms.modalEliminar')
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$regiones->render()!!}
        </div>
    </div>
</div>

@endsection