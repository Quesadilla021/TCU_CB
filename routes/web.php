<?php

use App\Http\Controllers\AgrupacionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ServicioController;
use App\Models\Agrupacion;
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
// Route::get('/teatrobarcos', function () {
//     return view('/Publicitaria/Landing/agrupaciones');
// })->name('agrupaciones');

Route::get('/agrupac{id}', [InicioController::class, 'cargar_agrupacion'])->name('agrupacion');
Route::get('/modal{id}', [InicioController::class, 'agrup_modal'])->name('modal');

Route::get('/', [InicioController::class, 'get_inicio'])->name('inicio');

// Admin
// Iniciar Sesion
Route::get('/login',[inicioSesionController::class, 'index'])->name('login');
Route::get('/iniciarsesion', [inicioSesionController::class, 'iniciarsesion'])->name('iniciarsesion');

// Ruta actualizar el inicio
Route::put('/updateInicio', [InicioController::class, 'updateInicio'])->name('actualizarInicio');

// Carga la pagina de Admin
// Rutas sobre las agrupaciones
Route::resource('/admin', AgrupacionController::class);
Route::get('/editarAgrupacion{id}', [AgrupacionController::class, 'edit'])->name('editarAgrupacion');

// Rutas sobre las publicaciones
Route::get('/publicacionesAgrup{id}', [PublicacionController::class, 'index'])->name('vistaAgrupacion');
Route::post('/publicaciones_Agrup{id}', [PublicacionController::class, 'index_dos'])->name('vistaAgrupacionMensaje');
Route::resource('/publicacion',PublicacionController::class);
Route::get('/crearPublicacion{id}', [PublicacionController::class, 'show'])->name('crearPublicacion');
Route::get('/editarPublicacion{id}', [PublicacionController::class, 'edit'])->name('editarPublicacion');
// Route::get('/editarPublicacion/{id}', [PublicacionController::class, 'update'])->name('editarPublicacion');

// Imagenes de las publicaciones
Route::post('/agregarImgs{id}', [PublicacionController::class, 'guardar_imgs'])->name('guardarImg');
Route::get('/vistaImg{id}', [PublicacionController::class, 'vistaAgregarMulti'])->name('vistaAgreMulti');
Route::get('/eliminarImg{id}', [PublicacionController::class, 'delete_img'])->name('eliminarImg');
// Video de las publicaciones
Route::post('/agregarVideo{id}',[PublicacionController::class, 'guardar_Video'])->name('guardarVideo');
Route::get('/eliminarVide{id}', [PublicacionController::class, 'delete_video'])->name('eliminarVide');
Route::get('/vistaEditImg{id}', [PublicacionController::class, 'vistaEditarMultimedia'])->name('vistaEditMulti');
Route::get('/eliImgE{id}', [PublicacionController::class, 'delete_img_edit'])->name('eliminarImgE');
Route::get('/eliVideE{id}', [PublicacionController::class, 'delete_video_edit'])->name('eliminarVideEditado');


//actualiza vista Inicio Landing
Route::put('/updateInicio', [InicioController::class, 'updateInicio'])->name('actualizarInicio');

//Vista admin servicios
Route::get('/admin_servicios', [ServicioController::class, 'index'])->name('vistaServicios');
Route::resource('/servicio',ServicioController::class);
Route::get('/editarServicio{id}', [ServicioController::class, 'edit'])->name('editarServicio');



