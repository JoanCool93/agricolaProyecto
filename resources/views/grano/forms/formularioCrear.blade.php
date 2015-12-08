<div class="form-group">
    {!! Form::label('especie', 'Especie del grano: ') !!}
    {!! Form::select('especie', $especies, 0 , ['class'=> 'form-control']) !!}
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
    {!! Form::label ('Costo:') !!}
    {!! Form::text('costo', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el costo por tonelada de grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Tamaño de la planta:') !!}
    {!! Form::text('tamañoPlanta', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el tamaño de la planta del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Tamaño del fruto:') !!}
    {!! Form::input('text', 'tamañoFruto', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el tamaño del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', 'Región de origen del grano: ') !!}
    {!! Form::select('region', $regiones, 0, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Forma del fruto:') !!}
    {!! Form::input('text','forma', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la forma del fruto del grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Periodo de maduración:') !!}
    {!! Form::input('text', 'periodoMaduracion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese entre la siembra y la cosecha']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Resistencias del grano:') !!}
    {!! Form::input('text', 'resistencias', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese las resistencias que presenta el grano']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Clima:') !!}
    {!! Form::input('text', 'clima', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese en que clima florece la planta. Ej: Humedo, Calido']) !!}
</div>