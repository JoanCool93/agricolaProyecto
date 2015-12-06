@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Tabla para la visualizacion de bodegas -->
    <div class="row">
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th class="col-lg-3">Id:</th>
                    <th class="col-lg-9">{{$bodega->id}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Nombre:</th>
                    <th class="col-lg-9">{{$bodega->nombre}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Descripción:</th>
                    <th class="col-lg-9">{{$bodega->descripcion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Ancho:</th>
                    <th class="col-lg-9">{{$bodega->ancho}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Alto:</th>
                    <th class="col-lg-9">{{$bodega->alto}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Profundidad:</th>
                    <th class="col-lg-9">{{$bodega->profundidad}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Construcción:</th>
                    <th class="col-lg-9">{{$bodega->construccion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Costo Mensual:</th>
                    <th class="col-lg-9">{{$bodega->costoMensual}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Costo Anual:</th>
                    <th class="col-lg-9">{{$bodega->costoAnual}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Capacidad Total:</th>
                    <th class="col-lg-9">{{$bodega->capacidadTotal}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Capacidad Usada:</th>
                    <th class="col-lg-9">{{$bodega->capacidadUsada}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Calle:</th>
                    <th class="col-lg-9">{{$bodega->calle}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Numero:</th>
                    <th class="col-lg-9">{{$bodega->numero}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Colonia o Fracionamiento:</th>
                    <th class="col-lg-9">{{$bodega->colonia}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Ciudad:</th>
                    <th class="col-lg-9">{{$bodega->ciudad}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Estado:</th>
                    <th class="col-lg-9">{{$bodega->estado}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Pais:</th>
                    <th class="col-lg-9">{{$bodega->pais}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Estado de la bodega:</th>
                    @if($bodega->estadoBodega == 0)
                        <th class="col-lg-9">Disponible</th>
                    @elseif($bodega->estadoBodega == 1)
                        <th class="col-lg-9">Rentada</th>
                    @elseif($bodega->estadoBodega == 2)
                        <th class="col-lg-9">Mantenimiento</th>
                    @elseif($bodega->estadoBodega == 3)
                        <th class="col-lg-9">En espera</th>
                    @endif
                </tr>
                <tr>
                    <th class="col-lg-3">Tipo de Accesso:</th>
                    @if($bodega->tipoAcesso == 0)
                        <th class="col-lg-9">Trailer</th>
                    @elseif($bodega->tipoAcceso == 1)
                        <th class="col-lg-9">Tren</th>
                    @elseif($bodega->tipoAcceso == 2)
                        <th class="col-lg-9">Avioneta</th>
                    @elseif($bodega->tipoAcceso == 3)
                        <th class="col-lg-9">Barco</th>
                    @endif
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection