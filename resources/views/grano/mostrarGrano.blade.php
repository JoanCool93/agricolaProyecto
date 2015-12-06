@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Tabla para la visualizacion de granos -->
    <div class="row">
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th class="col-lg-3">Id:</th>
                    <th class="col-lg-9">{{$grano->id}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Descripción:</th>
                    <th class="col-lg-9">{{$grano->descripcion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Ancho:</th>
                    <th class="col-lg-9">{{$grano->ancho}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Alto:</th>
                    <th class="col-lg-9">{{$grano->alto}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Profundidad:</th>
                    <th class="col-lg-9">{{$grano->profundidad}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Construcción:</th>
                    <th class="col-lg-9">{{$grano->construccion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Costo:</th>
                    <th class="col-lg-9">{{$grano->costo}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Capacidad Total:</th>
                    <th class="col-lg-9">{{$grano->capacidadTotal}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Capacidad Usada:</th>
                    <th class="col-lg-9">{{$grano->capacidadUsada}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Estado de la grano:</th>
                    @if($grano->estadograno == 0)
                        <th class="col-lg-9">Disponible</th>
                    @elseif($grano->estadograno == 1)
                        <th class="col-lg-9">Rentada</th>
                    @elseif($grano->estadograno == 2)
                        <th class="col-lg-9">Mantenimiento</th>
                    @elseif($grano->estadograno == 3)
                        <th class="col-lg-9">En espera</th>
                    @endif
                </tr>
                <tr>
                    <th class="col-lg-3">Tipo de Accesso:</th>
                    @if($grano->tipoAcesso == 0)
                        <th class="col-lg-9">Trailer</th>
                    @elseif($grano->tipoAcceso == 1)
                        <th class="col-lg-9">Tren</th>
                    @elseif($grano->tipoAcceso == 2)
                        <th class="col-lg-9">Avioneta</th>
                    @elseif($grano->tipoAcceso == 3)
                        <th class="col-lg-9">Barco</th>
                    @endif
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection