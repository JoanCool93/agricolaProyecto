@extends('layouts.dashboard')

@section('contenido2')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de grano</div>
 
                <div class="panel-body">
                	{{-- {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!} --}}
                    {!! Form::open(['route' => 'grano.store', 'method' => 'POST', 'class' => 'form']) !!}
                        @include('grano.forms.formularioCrear')
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