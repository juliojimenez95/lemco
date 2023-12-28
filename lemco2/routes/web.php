<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\AccionistaController;
use App\Http\Controllers\DeclaracionPepController;
use App\Http\Controllers\InformacionFController;
use App\Http\Controllers\EntidadFController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FondoController;
use App\Http\Controllers\DatosPersonalesController;
use App\Http\Controllers\CentralesRController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\ClientespController;
use App\Http\Controllers\AnexoController;

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
Route::get('/accionista/{id}', [ClienteController::class, 'accionista'])->name('cliente.accionista');
Route::get('/declaracion/{id}', [ClienteController::class, 'declaracion'])->name('cliente.declaracion');
Route::get('/financiera/{id}', [ClienteController::class, 'financiera'])->name('cliente.financiera');
Route::get('/entidadesf/{id}', [ClienteController::class, 'entidadesf'])->name('cliente.entidadesf');
Route::get('/contactos/{id}', [ClienteController::class, 'contactos'])->name('cliente.contactos');
Route::get('/fondos/{id}', [ClienteController::class, 'fondos'])->name('cliente.fondos');
Route::get('/autorizacion/{id}', [ClienteController::class, 'autorizacion'])->name('cliente.autorizacion');
Route::get('/reporter/{id}', [ClienteController::class, 'reporter'])->name('cliente.reporter');
Route::get('/firma/{id}', [ClienteController::class, 'firma'])->name('cliente.firma');
Route::get('/anexo/{id}', [ClienteController::class, 'anexo'])->name('cliente.anexo');

//rutas de creacion 
Route::post('/clientestore', [ClienteController::class, 'store'])->name('cliente.store');
Route::post('/accionista/store/{id}', [AccionistaController::class, 'store'])->name('accionista.store');
Route::post('/declaracion/store/{id}', [DeclaracionPepController::class, 'store'])->name('declaracion.store');
Route::post('/financiera/store/{id}', [InformacionFController::class, 'store'])->name('financiera.store');
Route::post('/entidades/store/{id}', [EntidadFController::class, 'store'])->name('entidades.store');
Route::post('/entidadesf/store/{id}', [EntidadesController::class, 'store'])->name('entidadesf.store');
Route::post('/contacto/store/{id}', [ContactoController::class, 'store'])->name('contacto.store');
Route::post('/fondos/store/{id}', [FondoController::class, 'store'])->name('fondos.store');
Route::post('/autorizacion/store/{id}', [DatosPersonalesController::class, 'store'])->name('autorizacion.store');
Route::post('/reporter/store/{id}', [CentralesRController::class, 'store'])->name('reporter.store');
Route::post('/firma/store/{id}', [FirmaController::class, 'store'])->name('firma.store');
Route::post('/anexo/store/{id}', [AnexoController::class, 'store'])->name('anexo.store');



//rutas proveedores
Route::get('/proveedore', [ProveedorController::class, 'index'])->name('cliente.registro');
Route::get('/proveedore/accionista', [ProveedorController::class, 'accionista'])->name('cliente.accionista');
Route::get('/proveedore/declaracion', [ProveedorController::class, 'declaracion'])->name('cliente.declaracion');
Route::get('/proveedore/financiera', [ProveedorController::class, 'financiera'])->name('cliente.financiera');
Route::get('/proveedore/entidadesf', [ProveedorController::class, 'entidadesf'])->name('cliente.entidadesf');
Route::get('/proveedore/entidades/{id}', [ProveedorController::class, 'entidades'])->name('cliente.entidades');
Route::get('/proveedore/clientes/{id}', [ProveedorController::class, 'clientes'])->name('cliente.clientes');
Route::get('/proveedore/contactos/{id}', [ProveedorController::class, 'contactos'])->name('cliente.contactos');
Route::get('/proveedore/fondos/{id}', [ProveedorController::class, 'fondos'])->name('cliente.fondos');
Route::get('/proveedore/autorizacion/{id}', [ProveedorController::class, 'autorizacion'])->name('cliente.autorizacion');
Route::get('/proveedore/reporter/{id}', [ProveedorController::class, 'reporter'])->name('cliente.reporter');
Route::get('/proveedore/firma/{id}', [ProveedorController::class, 'firma'])->name('cliente.firma');

//rutas proveedores creacion
Route::post('/proveedor/store', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::post('/clientesp/store/{id}', [ClientespController::class, 'store'])->name('clientesp.store');
Route::post('/contacto/store2/{id}', [ContactoController::class, 'store2'])->name('contacto.store2');
Route::post('/reporter/store2/{id}', [CentralesRController::class, 'store2'])->name('reporter.store2');





