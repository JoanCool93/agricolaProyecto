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
Route::get('/Productos/especie', [
    'as' => 'productos.especie',
    'uses' => 'HomeController@especie'
]);
Route::get('/Bodegas', [
    'as' => 'hbodegas',
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
Route::get('/perfilUsuario', [
    'as' => 'perfil',
    'uses' => 'UsuarioController@perfil'
]);

//Ruta para cargar el formulario de busqueda de usuario.
Route::get('/agregarUsuario', [
    'as' => 'agregarUsuario',
    'uses' => 'UsuarioController@agregar'
]);

//Rutas para el manejo de las bodegas
Route::resource('bodega', 'bodegaController');

//Rutas para el manejo de las bodegas
Route::resource('grano', 'granoController');

//Rutas para el manejo de las bodegas
Route::resource('especie', 'especieController');

//Rutas para el manejo de las regiones
Route::resource('region', 'regionController');

//Rutas para la autenticación
Route::resource('login', 'LogController');

//Ruta para cargar el formulario de autenticacion.
Route::get('/login', [
    'as' => 'login',
    'uses' => 'LogController@login'
]);

//Rutas de registro de grano
Route::resource('grano', 'GranoController');

//Rutas de registro de bodega
Route::resource('bodega', 'BodegaController');

//Ruta para el logout
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'LogController@logout'
]);

//Rutas de productos por especie
Route::get('/Producto/Tomate', [
    'as' => 'tomate',
    'uses' => 'ProductController@tomate'
]);
Route::get('/Producto/Pepino', [
    'as' => 'pepino',
    'uses' => 'ProductController@pepino'
]);
Route::get('/Producto/Chile', [
    'as' => 'chile',
    'uses' => 'ProductController@chile'
]);
Route::get('/Producto/Melon', [
    'as' => 'melon',
    'uses' => 'ProductController@melon'
]);
Route::get('/Producto/Sandia', [
    'as' => 'sandia',
    'uses' => 'ProductController@sandia'
]);
Route::get('/Producto/Frijol', [
    'as' => 'frijol',
    'uses' => 'ProductController@frijol'
]);
Route::get('/Producto/Garbanzo', [
    'as' => 'garbanzo',
    'uses' => 'ProductController@garbanzo'
]);
Route::get('/Producto/Maiz', [
    'as' => 'maiz',
    'uses' => 'ProductController@maiz'
]);
Route::get('/Producto/Cafe', [
    'as' => 'cafe',
    'uses' => 'ProductController@cafe'
]);

// Rutas de autenticación...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
//Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Rutas de registro...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);