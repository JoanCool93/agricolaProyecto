@extends('layouts.dashboard')

@section('contenido2')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Modificación de la grano</div>
 
                <div class="panel-body">
                	{{-- {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!} --}}
                    {!! Form::model($grano, ['route' => ['grano.update', $grano->id], 'method' => 'PUT']) !!}
                    	@include('grano.forms.formularioCrear')
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