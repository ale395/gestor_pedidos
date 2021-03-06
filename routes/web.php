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

Route::resource('reportes', 'PdfControlador');

Route::resource('users', 'UsersControlador');

Route::resource('pedidos', 'PedidoControlador');

Route::resource('home', 'ChartCircleControlador');

//Route::resource('home', 'ChartColumnControlador');

Route::get('/categorias', ['as' => 'categorias', 'uses' => 'CategoriasControlador2@index']);

Route::get('productos.pdf', 'ProductosControlador@pdf')->name('productos.pdf');

Route::get('descargarproductos.pdf', 'ProductosControlador@descargarPdf')->name('descargarproductos.pdf');

Route::get('clientes.pdf', 'ClientesControlador@pdf')->name('clientes.pdf');

Route::get('descargarclientes.pdf', 'ClientesControlador@descargarPdf')->name('descargarclientes.pdf');

Route::resource('reportes', 'PdfControlador');

Route::get('crear_reporte_pedidos/{tipo}', 'PdfControlador@crear_reporte_pedidos');