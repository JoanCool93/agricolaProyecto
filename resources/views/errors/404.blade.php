@extends('layouts.principal')

@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Página en construcción
                    <!-- <small>Pagina En Construccion</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <!-- <li class="active">404</li> -->
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1><span class="error-404">Ups!</span>
                    </h1>
                    <p>La página que buscabas esta en construcción.</p>
                    <img src="{{ asset('images/sitio-en-construcción.jpg') }}" width= "1020" height= "700">
                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->
@endsection