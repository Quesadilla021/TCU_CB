<?php

use App\Http\Controllers\InicioController;
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
// Route::get('/iniciarsesion', function () {
//     return view('/Publicitaria/Administrativa/inicioSesion');
// })->name('iniciarsesion');
Route::get('/iniciarsesion', [InicioController::class])->name('iniciarsesion');

Route::put('/updateInicio', [InicioController::class, 'updateInicio'])->name('actualizarInicio');

Route::get('/admin', function () {
    return view('/Publicitaria/Administrativa/index');
})->name('inicioAdmin');

Route::get('/admin_teatroBarcos', function () {
    return view('/Publicitaria/Administrativa/teatroBarcos');
})->name('vistaTeatroBarcos');

Route::get('/admin_servicios', function () {
    return view('/Publicitaria/Administrativa/servicios');
})->name('vistaServicios');
