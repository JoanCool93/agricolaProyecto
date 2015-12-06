@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Tabla para la visualizacion de usuarios -->
    <div class="row">
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th class="col-lg-3">Id:</th>
                    <th class="col-lg-9">{{$usuario->id}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Nombre:</th>
                    <th class="col-lg-9">{{$usuario->nombre}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Apellido Paterno:</th>
                    <th class="col-lg-9">{{$usuario->apellidoPaterno}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Apellido Materno:</th>
                    <th class="col-lg-9">{{$usuario->apellidoMaterno}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Correo electrónico:</th>
                    <th class="col-lg-9">{{$usuario->correoElectronico}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Telefono:</th>
                    <th class="col-lg-9">{{$usuario->telefono}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Celular:</th>
                    <th class="col-lg-9">{{$usuario->celular}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Tipo Usuario:</th>
                    @if($usuario->tipoUsuario == 0)
                        <th class="col-lg-9">Cliente</th>
                    @elseif($usuario->tipoUsuario == 1)
                        <th class="col-lg-9">Empleado</th>
                    @elseif($usuario->tipoUsuario == 2)
                        <th class="col-lg-9">Administrador de página</th>
                    @endif
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection