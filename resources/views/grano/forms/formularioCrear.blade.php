
@foreach ($especies as $especie  => $descripcion)
@endforeach
<div class="form-group">
    {!! Form::label('especie', 'Especie del grano: ') !!}
    {!! Form::select('especie', [
        @foreach ($especies as $especie  => $descripcion)
        0 => 'Trailer',
        1 => 'Tren',
        2 => 'Avioneta',
        3 => 'Barco'],0 , ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Variedad:') !!}
    {!! Form::text('variedad', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la variedad del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la descripción del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Tamaño de la planta:') !!}
    {!! Form::text('tamañoPlanta', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el tamaño de la planta del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Tamaño del grano:') !!}
    {!! Form::input('text', 'tamañoGrano', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el tamaño del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', 'Region de origen del grano: ') !!}
    {!! Form::select('region', [
        0 => 'Trailer',
        1 => 'Tren',
        2 => 'Avioneta',
        3 => 'Barco'],0 , ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Forma del fruto:') !!}
    {!! Form::input('text','forma', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la forma del fruto del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Periodo de maduración:') !!}
    {!! Form::input('text', 'periodoMaduración', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese entre la siembra y la cosecha']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Resistencias del grano:') !!}
    {!! Form::input('text', 'resistencias', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese las resistencias que presenta el grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Clima:') !!}
    {!! Form::input('text', 'capacidadTotal', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese en que clima florece la planta. Ej: Humedo, Calido']) !!}
</div>