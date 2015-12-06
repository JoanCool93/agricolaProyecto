@extends('layouts.dashboard')

@section('contenido2')
<div class="container">

    <!-- Tabla para la visualizacion de bodegas -->
    <div class="row">
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th class="col-lg-3">Id:</th>
                    <th class="col-lg-9">{{$especie->id}}</th>
                </tr>
                <tr>
                    <th class="col-lg-3">Descripción:</th>
                    <th class="col-lg-9">{{$especie->descripcion}}</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection