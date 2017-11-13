<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clientes', 'ClientesControlador');

Route::resource('productos', 'ProductosControlador');

Route::resource('categorias', 'CategoriasControlador');

Route::resource('users', 'UsersControlador');

Route::resource('pedidos', 'PedidoControlador');

Route::get('/categorias', ['as' => 'categorias', 'uses' => 'CategoriasControlador2@index']);