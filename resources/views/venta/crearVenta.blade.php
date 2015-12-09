@extends('layouts.dashboard')

@section('contenido2')
{!! Form::open(['route' => 'venta.create2', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	<div class="row">
		<div class="form-group col-md-3">
		    {!! Form::label('idCliente', '¿A que cliente se le va a vender?: ') !!}
		    {!! Form::select('idCliente', $clientes, 0, ['class'=> 'form-control']) !!}
		</div>
		<div class="form-group col-md-3">
			{!! Form::submit('Iniciar venta',['class' => 'btn btn-primary']) !!}
		</div>
	</div>
{!! Form::close() !!}
@endsection