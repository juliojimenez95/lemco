<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;


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
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.registro');
Route::get('/accionista', [ClienteController::class, 'accionista'])->name('cliente.accionista');
Route::get('/declaracion', [ClienteController::class, 'declaracion'])->name('cliente.declaracion');
Route::get('/financiera', [ClienteController::class, 'financiera'])->name('cliente.financiera');
Route::get('/fondos', [ClienteController::class, 'fondos'])->name('cliente.fondos');
Route::get('/autorizacion', [ClienteController::class, 'autorizacion'])->name('cliente.autorizacion');
Route::get('/reporter', [ClienteController::class, 'reporter'])->name('cliente.reporter');
Route::get('/firma', [ClienteController::class, 'firma'])->name('cliente.firma');
Route::get('/anexo', [ClienteController::class, 'anexo'])->name('cliente.anexo');


//rutas proveedores

Route::get('/proveedore', [ProveedorController::class, 'index'])->name('cliente.registro');
Route::get('/proveedore/accionista', [ProveedorController::class, 'accionista'])->name('cliente.accionista');
Route::get('/proveedore/declaracion', [ProveedorController::class, 'declaracion'])->name('cliente.declaracion');
Route::get('/proveedore/financiera', [ProveedorController::class, 'financiera'])->name('cliente.financiera');
Route::get('/proveedore/entidades', [ProveedorController::class, 'entidades'])->name('cliente.entidades');
Route::get('/proveedore/clientes', [ProveedorController::class, 'clientes'])->name('cliente.clientes');
Route::get('/proveedore/contactos', [ProveedorController::class, 'contactos'])->name('cliente.contactos');
Route::get('/proveedore/fondos', [ProveedorController::class, 'fondos'])->name('cliente.fondos');
Route::get('/proveedore/autorizacion', [ProveedorController::class, 'autorizacion'])->name('cliente.autorizacion');
Route::get('/proveedore/reporter', [ProveedorController::class, 'reporter'])->name('cliente.reporter');
Route::get('/proveedore/firma', [ProveedorController::class, 'firma'])->name('cliente.firma');





