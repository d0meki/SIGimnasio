<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\EntrenamientoHorarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\MembresiaPlanController;
use App\Http\Controllers\OficioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ReciboController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\ServicioController;
use Database\Factories\MembresiaPlanFactory;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Contracts\Activity;
use Symfony\Component\Routing\Router;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);


Route::get('main', [MainController::class, 'vista_principal'])->name('main.pag_principal');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('oficios', OficioController::class)->parameters(['oficios' => 'tag'])->names('admin.oficios');
Route::resource('clientes', ClienteController::class)->parameters(['clientes' => 'tag'])->names('admin.clientes');
Route::resource('personas', PersonaController::class)->parameters(['personas' => 'tag'])->names('admin.personas');
Route::resource('entrenadores', EntrenadorController::class)->parameters(['entrenadores' => 'tag'])->names('admin.entrenadores');
Route::resource('administrativos', AdministradorController::class)->parameters(['administrativos' => 'tag'])->names('admin.administrativos');
Route::resource('disciplinas', DisciplinaController::class)->parameters(['disciplinas' => 'tag'])->names('admin.disciplinas');
Route::resource('secciones', SeccionController::class)->parameters(['secciones' => 'tag'])->names('admin.secciones');
Route::resource('entrenamientos', EntrenamientoController::class)->parameters(['entrenamientos' => 'tag'])->names('admin.entrenamientos');
Route::resource('empleados', EntrenamientoController::class)->parameters(['empleados' => 'tag'])->names('admin.empleados');
Route::resource('membresias', MembresiaController::class)->parameters(['membresias' => 'tag'])->names('admin.membresias');
Route::resource('planes', MembresiaPlanController::class)->parameters(['planes' => 'tag'])->names('admin.planes');
Route::resource('recibos', ReciboController::class)->parameters(['recibos' => 'tag'])->names('admin.recibos');
Route::resource('entrenamientos', EntrenamientoHorarioController::class)->parameters(['entrenamientos' => 'tag'])->names('admin.entrenamientos');
Route::resource('asistencias', AsistenciaController::class)->parameters(['asistencias' => 'tag'])->names('admin.asistencias');
Route::resource('bitacora', BitacoraController::class)->parameters(['bitacora' => 'tag'])->names('admin.bitacora');

Route::get('download-pdf', [ReciboController::class, 'downloadPDF'])->name('reciboPDF');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// $router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer'], function() use ($router) {
//     $router->get('logs', 'LogViewerController@index');
// });