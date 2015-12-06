<div class="form-group">
    {!! Form::label ('Nombre:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la nombre de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la descripción de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Ancho:') !!}
    {!! Form::text('ancho', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el ancho de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Alto:') !!}
    {!! Form::input('text', 'alto', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el alto de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Profundidad:') !!}
    {!! Form::input('text','profundidad', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la profundidad de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Construccion:') !!}
    {!! Form::input('text', 'construccion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la construcción de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Costo Mensual:') !!}
    {!! Form::input('text', 'costoMensual', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el costo de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Costo Anual:') !!}
    {!! Form::input('text', 'costoAnual', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el costo de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Capacidad Total:') !!}
    {!! Form::input('text', 'capacidadTotal', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el costo de la bodega']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipoAcceso', 'Tipo de Acceso: ') !!}
    {!! Form::select('tipoAcceso', [
        0 => 'Trailer',
        1 => 'Tren',
        2 => 'Avioneta',
        3 => 'Barco'],0 , ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Calle:') !!}
    {!! Form::input('text', 'calle', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la calle sobre la que se encuentra la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Numero:') !!}
    {!! Form::input('text', 'numero', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el numero de la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Colonia:') !!}
    {!! Form::input('text', 'colonia', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la colonia en la que se encuentra la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Ciudad:') !!}
    {!! Form::input('text', 'ciudad', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la ciudad en la que se encuentra la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Estado o provincia:') !!}
    {!! Form::input('text', 'estado', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el estado en la que se encuentra la bodega']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Pais:') !!}
    {!! Form::input('text', 'pais', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el pais en la que se encuentra la bodega']) !!}
</div>