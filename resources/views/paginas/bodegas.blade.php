@extends('layouts.principal')

@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bodegas disponibles
                    <!--<small>Subheading</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Bodegas</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        @foreach($bodegas as $bodega)
        @if($bodega->estadoBodega == 0)
            <div class="row">
                <div class="col-md-7">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-hover" src="{{ asset('images/bodegas1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h2>{!!$bodega->nombre!!}</h2>
                    <h3>Descripción Breve:</h3>
                    <p><h4>{!!$bodega->descripcion!!}</h4></p>
                    <p><h3>Costo:</h3>
                    <h4>{!!$bodega->costoMensual!!}</h4></p>
                    <h3>Construcción:</h3>
                    <h4>{!!$bodega->construccion!!}m2.</h4>
                    <h3>Dirección:</h3>
                    <p><h4>{!!$bodega->calle!!}, {!!$bodega->numero!!}, {!!$bodega->colonia!!}, {!!$bodega->ciudad!!}, {!!$bodega->estado!!}, {!!$bodega->pais!!} </h4></p>
                    @if(Auth::guest())
                        @include('layouts.modalLoginBodega')
                        
                    @else
                        {!! link_to_route('inicioRenta', $title = ' Rentar', $parameters = [$bodega->id], $attributes = ['class'=> 'btn btn-primary fa fa-thumbs-up'])!!}
                    @endif
                    {!! link_to_route('bodegaPdf', $title = ' Imprimir detalles', $parameters = $bodega->nombre, $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
                </div>
            </div>
            <hr>
            <!-- /.row -->
        @endif
        @endforeach
        <hr>
    </div>
    <!-- /.container -->
    {!!$bodegas->render()!!}
@endsection