@extends('layouts.dashboard')

@section('contenido2')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de usuario</div>
 
                <div class="panel-body">
                	{{-- {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!} --}}
                    {!! Form::open(['route' => 'usuario.store', 'method' => 'POST', 'class' => 'form']) !!}
                        @include('usuario.forms.formularioCrear')
                        <div class="form-group">
                            {!! Form::label ('Confirmar contraseña:') !!}
                            {!! Form::password('password_confirmation', ['class'=> 'form-control', 'placeholder' => 'Confirme la contraseña']) !!}
                        </div>
                        <div class="form-group">
					        {!! Form::label('tipoUsuario', 'Tipo Usuario: ') !!}
					        {!! Form::select('tipoUsuario', [
								   0 => 'Cliente',
								   1 => 'Empleado',
								   2 => 'Administrador de página'],0 , ['class'=> 'form-control']) !!}
                        </div>
						<hr>
                        <div>
                            {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection