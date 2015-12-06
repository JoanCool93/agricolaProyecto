@extends('layouts.principal')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
 
                <div class="panel-body">
                	{{-- {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!} --}}
                    {!! Form::open(['route' => 'usuario.store', 'method' => 'POST', 'class' => 'form']) !!}
                        @include('usuario.forms.formularioCrear')
                        <div class="form-group">
                            {!! Form::label ('Confirmar contraseña:') !!}
                            {!! Form::password('password_confirmation', ['class'=> 'form-control', 'placeholder' => 'Confirme la contraseña']) !!}
                        </div>

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