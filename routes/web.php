<?php

use Illuminate\Support\Facades\Route;

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
    return view('bienvenido');
});
Route::resource('paises','PaisesController');
Route::resource('entidades','EntidadesController');
Route::resource('municipios','MunicipiosController');
Route::resource('tipos_usuario','Tipos_UsuarioController');
Route::resource('usuario','UsuarioController');
Route::resource('provedores','ProvedorController');
Route::resource('categorias','CategoriasController');
Route::resource('tipos_venta','Tipos_VentaController');
Route::resource('productos','ProductosController');
Route::resource('fotos_productos','Fotos_ProductosController');
Route::resource('compras','ComprasController');
Route::resource('detalle_compra','Detalle_ComprasController');
Route::resource('tipos_pago','Tipos_PagoController');
Route::resource('ventas','VentasController');
Route::resource('detalle_venta','Detalle_ventaController');
