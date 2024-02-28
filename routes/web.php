<?php

use App\Http\Controllers\AgrupacionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\inicioSesionController;
use App\Models\Inicio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/Publicitaria/Landing/index');
// })->name('index');

// Pagina Web
Route::get('/teatrobarcos', function () {
    return view('/Publicitaria/Landing/agrupaciones');
})->name('agrupaciones');

Route::get('/', [InicioController::class, 'get_inicio'])->name('inicio');



// Admin
// Iniciar Sesion
Route::get('/login',[inicioSesionController::class, 'index'])->name('login');
Route::get('/iniciarsesion', [inicioSesionController::class, 'iniciarsesion'])->name('iniciarsesion');

// Carga la pagina de Admin
Route::resource('/admin', AgrupacionController::class);

Route::put('/updateInicio', [InicioController::class, 'updateInicio'])->name('actualizarInicio');

Route::get('/admin_teatroBarcos', function () {
    return view('/Publicitaria/Administrativa/teatroBarcos');
})->name('vistaTeatroBarcos');

Route::get('/admin_servicios', function () {
    return view('/Publicitaria/Administrativa/servicios');
})->name('vistaServicios');
