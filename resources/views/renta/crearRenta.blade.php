@extends('layouts.dashboard')

@section('contenido2')
<div>
	{!! Form::open(['route' => 'creacionRenta', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('bodega', 'Ingrese bodega a rentar: ') !!}
            {!! Form::select('idBodega', $bodegas, $sid , ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label ('¿Por cuantos meses desea rentarla?:') !!}
            {!! Form::input('text', 'duracionMeses', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la cantidad de meses a rentarla']) !!}
        </div>
        <div>
            {!! Form::submit('Rentar',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div>
</div>
@endsection