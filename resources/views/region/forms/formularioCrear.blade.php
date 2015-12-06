<div class="form-group">
    {!! Form::label ('Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la descripción de la especie']) !!}
</div>
<div class="form-group">
	{!! Form::label('tipoRegion', 'Tipo de región: ') !!}
	{!! Form::select('tipoRegion', [
		0 => 'Nacional',
		1 => 'Internacional'],0 , ['class'=> 'form-control']) !!}
</div>