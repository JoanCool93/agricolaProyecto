@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Campos de busqueda de usuario -->
    <div class="row">
        <div class="col-lg-9">
	        <div class="col-lg-5">
	        	<div class="form-group">
	                {!! Form::label ('Buscar por ID:') !!}
	                {!! Form::input('text', 'idUsuario', '', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese Id a buscar']) !!}
	            </div>
	        </div>
	        <div class="col-lg-5">
	        	<div class="form-group">
	                {!! Form::label ('Buscar por Apellido:') !!}
	                {!! Form::input('text', 'apellido', '', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese apellido a buscar']) !!}
	            </div>
	        </div>
	        <div class="col-lg-2"  align="center">
	        	{!! link_to('usuario/create', $title = 'Agregar usuario', $attributes = ['class'=>'btn btn-primary fa fa-plus'])!!}
		    </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de usuarios -->
    <div class="row">
        <div class="col-lg-9">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-2">Nombre:</th>
					<th class="col-lg-2">Apellido Paterno:</th>
					<th class="col-lg-1">Tipo Usuario:</th>
					<th class="col-lg-1"></th>
					<th class="col-lg-1"><span align="center">Acciones</span></th>
					<th class="col-lg-1"></th>
				</thread>
				@foreach($usuarios as $usuario)
				<tbody>
					<th class="col-lg-1">{{$usuario->id}}</th>
					<th class="col-lg-2">{{$usuario->nombre}}</th>
					<th class="col-lg-2">{{$usuario->apellidoPaterno}}</th>
					@if($usuario->tipoUsuario == 0)
                        <th class="col-lg-1">Cliente</th>
                    @elseif($usuario->tipoUsuario == 1)
                        <th class="col-lg-1">Empleado</th>
                    @elseif($usuario->tipoUsuario == 2)
                        <th class="col-lg-1">Administrador de página</th>
                    @endif
					<th class="col-lg-1">
						{!! link_to_route('usuario.show', $title = 'Mostrar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
					</th>
					<th class="col-lg-1">
						{!! link_to_route('usuario.edit', $title = 'Modificar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
					</th>
					<th class="col-lg-1">
						@include('usuario.forms.modalEliminar')
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$usuarios->render()!!}
        </div>
    </div>
</div>

@endsection