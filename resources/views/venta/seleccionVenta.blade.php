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
			@foreach($lineasVenta as $lineaVenta)
			<tbody>
				<th class="col-lg-1">{{$lineaVenta->idGrano}}</th>
				<th class="col-lg-2">{{$lineaVenta->grano->especie}}</th>
				<th class="col-lg-2">{{$lineaVenta->grano->variedad}}</th>
				<th class="col-lg-1">{{$lineaVenta->grano->costo}}</th>
				<th class="col-lg-1">{{$lineaVenta->cantidad}}</th>
				<th class="col-lg-1">{{$lineaVenta->subTotal}}</th>
				<th class="col-lg-2">
					{!! link_to_route('lineaVenta.edit', $title = 'Modificar', $parameters = $lineaVenta->id, $attributes = ['class'=>'btn btn-primary fa fa-edit', 'onClick'=>'bPreguntar = false'])!!}
				</th>
				<th class="col-lg-1">
					@include('venta.forms.modalEliminar')
				</th>
			</tbody>
			@endforeach
		</table>
    </div>
</div>
<div>
	{!! Form::open(['route' => 'lineaVenta.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	    @include('venta.forms.agregarLV')
		<div class="col-md-2">
			{!! Form::input('text', 'idVenta', $venta->id, ['class'=> 'form-control hide', 'placeholder' => 'Ingrese la cantidad de grano a vender']) !!}
			{!! Form::submit('Agregar grano',['class' => 'btn btn-primary', 'onClick'=>'bPreguntar = false']) !!}
		</div>
		{!! Form::close() !!}
		<div class="col-md-2"  align="right">
			{!! Form::open(['route' => 'venta.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
			{!! Form::submit('Finalizar venta',['class' => 'btn btn-primary', 'onClick'=>'bPreguntar = false']) !!}
			{!! Form::close() !!}
		</div>
		<div class="col-md-2"  align="right">
			{!! Form::open(['route' => ['venta.destroy', $venta->id], 'method' => 'DELETE']) !!}
	            <div>
	                {!! Form::submit('Cancelar venta',['class' => 'btn btn-danger', 'onClick'=>'bPreguntar = false']) !!}
	            </div>
	    	{!! Form::close() !!}
		</div>
	</div>
</div>
<script language="JavaScript" type="text/javascript"> 
    window.onbeforeunload = preguntarAntesDeSalir;
    var bPreguntar = true;
    function preguntarAntesDeSalir()
    {
      if (bPreguntar)
        return "Existe una venta en progreso. Si desea salir de la página cancele la venta primero";
    }
</script>
@endsection