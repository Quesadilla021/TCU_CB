<?php

use App\Http\Controllers\AgrupacionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\PublicacionController;
use App\Models\Inicio;
use App\Models\Publicacion;
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
// Rutas sobre las agrupaciones
Route::resource('/admin', AgrupacionController::class);
Route::get('/edit{id}', [AgrupacionController::class, 'edit'])->name('editarAgrupacion');

// Rutas sobre las agrupaciones
Route::get('/agrupacion{id}', [PublicacionController::class, 'index'])->name('vistaAgrupacion');
Route::get('/crearPublicacion', [PublicacionController::class, 'create'])->name('crearPublicacion');




Route::put('/updateInicio', [InicioController::class, 'updateInicio'])->name('actualizarInicio');


Route::get('/admin_servicios', function () {
    return view('/Publicitaria/Administrativa/servicios');
})->name('vistaServicios');
