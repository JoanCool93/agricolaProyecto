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
                    <th class="col-lg-3">Especie:</th>
                    <th class="col-lg-9">{{$grano->especie}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Variedad:</th>
                    <th class="col-lg-9">{{$grano->variedad}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Descripción:</th>
                    <th class="col-lg-9">{{$grano->descripcion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Costo:</th>
                    <th class="col-lg-9">{{$grano->costo}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Tamaño de la planta:</th>
                    <th class="col-lg-9">{{$grano->tamañoPlanta}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Tamaño del Fruto:</th>
                    <th class="col-lg-9">{{$grano->tamañoFruto}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Región:</th>
                    <th class="col-lg-9">{{$grano->region}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Forma del fruto:</th>
                    <th class="col-lg-9">{{$grano->forma}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Periodo de Maduración del fruto:</th>
                    <th class="col-lg-9">{{$grano->periodoMaduracion}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Resistencia a enfermedades del grano:</th>
                    <th class="col-lg-9">{{$grano->resistencias}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Clima ideal para la planta:</th>
                    <th class="col-lg-9">{{$grano->clima}}</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection