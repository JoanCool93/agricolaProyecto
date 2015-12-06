<div class="form-group">
    {!! Form::label ('Nombre:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Apellido Paterno:') !!}
    {!! Form::text('apellidoPaterno', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese apellido paterno']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Apellido Materno:') !!}
    {!! Form::input('text', 'apellidoMaterno', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese apellido materno']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Correo electrónico:') !!}
    {!! Form::email('correoElectronico', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese su correo electronico']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Teléfono:') !!}
    {!! Form::input('text', 'telefono', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese número telefónico']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Celular:') !!}
    {!! Form::input('text', 'celular', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese número celular']) !!}
</div>
<div class="form-group">
    {!! Form::label ('Contraseña:') !!}
    {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Ingrese contraseña']) !!}
</div>