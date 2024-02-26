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

Route::get('/', [InicioController::class, 'get_inicio'])->name('inicio');

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