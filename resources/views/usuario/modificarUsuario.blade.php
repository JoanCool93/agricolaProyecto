@extends('layouts.dashboard')

@section('contenido2')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
 
                <div class="panel-body">
                	{{-- {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!} --}}
                    {!! Form::model($usuario, ['route' => ['usuario.update', $usuario->id], 'method' => 'PUT']) !!}
                    	@include('usuario.forms.formularioCrear')
                        <div class="form-group">
					        {!! Form::label('tipoUsuario', 'Tipo Usuario: ') !!}
					        {!! Form::select('tipoUsuario', [
								   0 => 'Cliente',
								   1 => 'Empleado',
								   2 => 'Administrador de página'], $usuario->tipoUsuario, ['class'=> 'form-control']
							) !!}
                        </div>
                        <div>
                            {!! Form::submit('Modificar',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection