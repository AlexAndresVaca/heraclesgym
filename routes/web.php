<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MedidasController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\IngresoController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::POST('/login/', [PagesController::class, 'iniciarSesion'])->name('iniciarSesion');
Route::POST('/close', [PagesController::class, 'cerrarSesion'])->name('cerrarSesion');
Route::get('inicio', [PagesController::class, 'inicio'])->name('inicio');
Route::get('productos', [PagesController::class, 'productos'])->name('productos');
// RUTAS PARA GESTION CLIENTES
Route::get('inicio/clientes',[ClientesController::class, 'clientes_index'])->name('clientes.index');
Route::get('inicio/clientes/perfil/',[ClientesController::class, 'clientes_perfil'])->name('clientes.perfil');
// MEDIDAS HOMBRE
Route::get('inicio/clientes/perfil/nueva-medidas',[MedidasController::class, 'clientes_medidas_nueva'])->name('clientes.medidas.registrar');
Route::get('inicio/clientes/perfil/medidas',[MedidasController::class, 'clientes_medidas'])->name('clientes.medidas');

// RUTAS PARA GESTION PRODUCTOS
Route::get('inicio/productos',[ProductosController::class, 'productos_index'])->name('productos.index');
Route::get('inicio/productos/detalles',[ProductosController::class, 'productos_detalles'])->name('productos.detalles');
// REPORTES
Route::get('inicio/reportes/diario',[ReportesController::class ,'reportes_diario'])->name('reportes_diario');
Route::get('inicio/reportes/mensual',[ReportesController::class ,'reportes_mensual'])->name('reportes_mensual');
// ACCESSO CLIENTES
Route::get('heracles/ingreso',[IngresoController::class,'ingreso'])->name('heracles.ingreso');
Route::get('heracles/consulta',[IngresoController::class,'consulta'])->name('heracles.consulta');


