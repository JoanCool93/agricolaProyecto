@extends('layouts.principal')
@section('content')
    @include('alertas.exito')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar Sesión</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'login.store', 'method' => 'POST', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                {!! Form::email('correoElectronico', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                {!! Form::password('password', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox"> Recordarme</label>
                            </div>
                            <div>                            
                                {!! Form::submit('Iniciar sesión',['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection