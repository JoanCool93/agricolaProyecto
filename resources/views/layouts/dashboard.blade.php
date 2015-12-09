@extends('layouts.principal')

@section('content')
<!--Contenido de la pagina -->
<div class="container">

    <!-- Encabezado de pagina -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Panel de Usuario
                <small>{{ Auth::user()->nombre }}</small>
            </h1>
            <!-- Patron  -->
            <ol class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="active">Panel de usuario</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            @if (Auth::user()->tipoUsuario == 2 )
            <div class="list-group">
                <a href="#" class="list-group-item header blocked"><h4>Gestion de la página</h4></a>
                <a href="{{route('usuario.index')}}" class="list-group-item">Usuarios</a>
                <a href="/especie" class="list-group-item">Especies de granos</a>
                <a href="/region" class="list-group-item">Regiones</a>
                <a href="/grano" class="list-group-item">Granos</a>
                <a href="/bodega" class="list-group-item">Bodegas</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item"><h4>Operaciones</h4></a>
            @elseif (Auth::user()->tipoUsuario == 1 )
            <div class="list-group">
                <a href="#" class="list-group-item header blocked"><h4>Compra-Venta</h4></a>
                <a href="{{route('compra.create')}}" class="list-group-item">Registrar compra de grano</a>
                <a href="#" class="list-group-item">Realizar venta de grano</a>
                <a href="/inventario" class="list-group-item">Ver Inventario</a>
                <a href="/renta" class="list-group-item">Ver Rentas</a>
                <a href="/compra" class="list-group-item">Ver Compras</a>
                <a href="/venta" class="list-group-item">Ver Compras</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item"><h4>Operaciones</h4></a>
            @else
            <div class="list-group">
                {{-- <a href="portfolio-item.html" class="list-group-item">Single Portfolio Item</a>
                <a href="blog-home-1.html" class="list-group-item">Blog Home 1</a> --}}
                <a href="#" class="list-group-item"><h4>Operaciones</h4></a>
                <a href="/rentar" class="list-group-item">Renta Bodega</a>
                <a href="#" class="list-group-item">Bodegas Rentadas</a>
                <a href="#" class="list-group-item">Compra de Granos</a>
                <a href="#" class="list-group-item">Seguimiento Pedido</a>
            @endif
                <a href="/mensajes" class="list-group-item">Mensajes <span class="badge">0</span> </a>
                <a href="/modificarUsuario" class="list-group-item">Modificar Datos</a>
                <a href="/logout" class="list-group-item">Salir</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            @yield('contenido2')
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection