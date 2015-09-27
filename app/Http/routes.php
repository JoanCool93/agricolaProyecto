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
Route::get('/AcercaDe', [
    'as' => 'empresa',
    'uses' => 'HomeController@acercaDe'
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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);