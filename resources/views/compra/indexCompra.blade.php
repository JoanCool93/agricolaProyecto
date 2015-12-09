@extends('layouts.dashboard')

@section('contenido2')
<div class="container">
    <!-- Campos de busqueda de bodega -->
    <div class="row">
        <div class="col-lg-9">
	        <div class="col-lg-12">
	        	<div class="form-group">
	                {!! Form::label ('Buscar por id del empleado :') !!}
	                {!! Form::input('text', 'idEmpleado', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese id a buscar']) !!}
	            </div>
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
					<th class="col-lg-1">
						@if($bodega->estadoBodega == 0)
							Disponible
	                    @elseif($bodega->estadoBodega == 1)
	                        Rentada
	                    @elseif($bodega->estadoBodega == 2)
	                        Uso interno
	                    @elseif($bodega->estadoBodega == 3)
	                        Mantenimiento
	                    @endif
                    </th>
					<th class="col-lg-1">
						{!! link_to_route('bodega.show', $title = 'Mostrar', $parameters = $bodega->id, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
					</th>
					<th class="col-lg-1">
						{!! link_to_route('bodega.edit', $title = 'Modificar', $parameters = $bodega->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						@include('bodega.forms.modalEliminar')
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$compras->render()!!}
        </div>
    </div>
</div>
@endsection