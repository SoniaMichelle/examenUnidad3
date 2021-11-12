<?php

use App\Http\Controllers\PersonasControl;
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

Route::get('/', [PersonasControl::class, 'index'])->name('personas.index');
/* RUTA DE AGREGAR */
Route::get('agregar', [PersonasControl::class, 'agregar'])->name('personas.agregar');
/* METODO PARA AGREGAR */
Route::post('registro', [PersonasControl::class, 'store'])->name('personas.store');
/* RUTA PARA ACTUALIZAR */
Route::get('actualizar/{personas}/actualizar', [PersonasControl::class, 'actualizar'])->name('personas.actualizar');
/* METODO PARA ACTUALIZAR */
Route::put('index/{personas}', [PersonasControl::class, 'update'])->name('personas.update');
/* RUTA DE ELIMINAR USUARIO */
Route::delete('index/{personas}', [PersonasControl::class, 'eliminar'])->name('personas.eliminar');

