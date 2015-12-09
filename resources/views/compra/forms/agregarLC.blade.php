<div class="row">
	<div class="form-group col-md-3">
	    {!! Form::label('grano', 'Grano: ') !!}
	    {!! Form::select('grano', $granos, 0, ['class'=> 'form-control']) !!}
	</div>
	<div class="col-md-3">
	    {!! Form::label ('Toneladas compradas:') !!}
	    {!! Form::input('text', 'cantidad', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la cantidad de grano comprada']) !!}
	</div>