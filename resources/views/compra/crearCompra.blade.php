@extends('layouts.dashboard')

@section('contenido2')
<div class="row">
    <div class="col-lg-12">
        <table class="table">
        	<thread>
				<th class="col-lg-1">Id Grano:</th>
				<th class="col-lg-2">Especie:</th>
				<th class="col-lg-2">Variedad:</th>
				<th class="col-lg-1">Costo:</th>
				<th class="col-lg-1">Cantidad:</th>
				<th class="col-lg-1">Subtotal:</th>
				<th class="col-lg-1"></th>
				<th class="col-lg-1"><span align="center">Acciones</span></th>
				<th class="col-lg-1"></th>
			</thread>
			@foreach($lineasCompra as $lineaCompra)
			<tbody>
				<th class="col-lg-1">{{$lineaCompra->idGrano}}</th>
				<th class="col-lg-2">{{$lineaCompra->grano->especie}}</th>
				<th class="col-lg-2">{{$lineaCompra->grano->variedad}}</th>
				<th class="col-lg-1">{{$lineaCompra->grano->costo}}</th>
				<th class="col-lg-1">{{$lineaCompra->cantidad}}</th>
				<th class="col-lg-1">{{$lineaCompra->subTotal}}</th>
				<th class="col-lg-2">
					{!! link_to_route('compra.edit', $title = 'Modificar', $parameters = $lineaCompra->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
				</th>
				<th class="col-lg-1">
					@include('compra.forms.modalEliminar')
				</th>
			</tbody>
			@endforeach
		</table>
    </div>
</div>
<div>
	{!! Form::open(['route' => 'compra.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	    @include('compra.forms.agregarLV')
		<div class="col-md-2">
			{!! Form::input('text', 'idCompra', $compra->id, ['class'=> 'form-control hide', 'placeholder' => 'Ingrese la cantidad de grano comprada']) !!}
			{!! Form::submit('Agregar grano',['class' => 'btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}
		<div class="col-md-2"  align="right">
			{!! link_to_route('finalizarCompra', $title = 'Finalizar compra', $parameters= null, $attributes = ['class'=>'btn btn-primary'])!!}
		</div>
		<div class="col-md-2"  align="right">
			{!! link_to_route('cancelarCompra', $title = 'Cancelar compra', $parameters= null, $attributes = ['class'=>'btn btn-warning'])!!}
		</div>
	</div>
</div>
@endsection