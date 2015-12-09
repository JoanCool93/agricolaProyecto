<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('/', function () {
    return view('welcome');
});
*/

//Rutas de la pagina home
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
Route::get('/nuestraEmpresa', [
    'as' => 'empresa',
    'uses' => 'HomeController@acercaDe'
]);
Route::get('/Productos', [
    'as' => 'productos',
    'uses' => 'HomeController@productos'
]);
Route::get('/Bodegas', [
    'as' => 'bodegas',
    'uses' => 'HomeController@bodegas'
]);
Route::get('/Blog', [
    'as' => 'blog',
    'uses' => 'HomeController@blog'
]);
Route::get('/Contacto', [
    'as' => 'contacto',
    'uses' => 'HomeController@contacto'
]);

//Rutas de registro de usuario
Route::resource('usuario', 'UsuarioController');

//Ruta de redireccionamiento al ingresar con algún usuario.
Route::get('/Perfil', [
    'as' => 'perfil',
    'uses' => 'UsuarioController@perfil'
]);

//Ruta para cargar el formulario de busqueda de usuario.
Route::get('/agregarUsuario', [
    'as' => 'agregarUsuario',
    'uses' => 'UsuarioController@agregar'
]);

//Rutas para el manejo de las bodegas
Route::resource('bodega', 'BodegaController');

//Rutas para el manejo de las bodegas
Route::resource('grano', 'GranoController');

//Rutas para el manejo de las bodegas
Route::resource('especie', 'especieController');

//Rutas para el manejo de las regiones
Route::resource('region', 'regionController');

//Rutas para la autenticación
Route::resource('login', 'LogController');

//Ruta para cargar el formulario de autenticacion.
Route::get('/Login', [
    'as' => 'login',
    'uses' => 'LogController@login'
]);

//Ruta para el login desde bodegas
Route::post('/Bodegas', [
    'as' => 'loginBodega',
    'uses' => 'LogController@store2'

]);//Ruta para el logout
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'LogController@logout'
]);

//Rutas para manejo de visualizacion de los productos
Route::get('Producto/{especie}', [
    'as' => 'producto',
    'uses' => 'ProductoController@especie'
]);

Route::get('Productos/Region/{region}', [
    'as' => 'region',
    'uses' => 'ProductoController@region'
]);

Route::get('Producto/{especie}/{variedad}', [
    'as' => 'productoEspecie',
    'uses' => 'ProductoController@productoEspecie'
]);

Route::get('Productos/Region/{region}/{variedad}', [
    'as' => 'productoRegion',
    'uses' => 'ProductoController@productoRegion'
]);

//Rutas para la visualización de PDF con información
// detallada de productos y servicios
Route::get('Producto/pdf/{especie}/{variedad}', [
    'as' => 'productoPdf',
    'uses' => 'PdfController@producto'
]);

Route::get('Bodega/pdf/{nombre}', [
    'as' => 'bodegaPdf',
    'uses' => 'PdfController@bodega'
]);

//Rutas para el mail
Route::resource('mail', 'MailController');

//Rutas el manejo de las compras
Route::resource('compra', 'CompraController');
Route::resource('lineaCompra', 'LineaCompraController');

Route::get('/registroCompra', [
    'as' => 'inicioCompra',
    'uses' => 'CompraController@crearCompra'
]);

Route::post('/registroCompra', [
    'as' => 'compra.store2',
    'uses' => 'CompraController@store2'
]);
//Rutas el manejo de las ventas
Route::resource('venta', 'VentaController');
Route::resource('lineaVenta', 'LineaVentaController');

Route::get('/registroVenta', [
    'as' => 'inicioVenta',
    'uses' => 'VentaController@crearVenta'
]);

Route::get('/inicioVenta', [
    'as' => 'iniciarVenta',
    'uses' => 'VentaController@iniciarVenta'
]);
Route::post('/inicioVenta', [
    'as' => 'venta.create2',
    'uses' => 'VentaController@create2'
]);

//Rutas de manejo de rentas
Route::get('/rentar/{id?}', [
    'as' => 'inicioRenta',
    'uses' => 'RentaController@crearRenta'
]);
Route::post('/rentar', [
    'as' => 'creacionRenta',
    'uses' => 'RentaController@store'
]);

Route::get('/renta', [
    'as' => 'indexRenta',
    'uses' => 'RentaController@index'
]);