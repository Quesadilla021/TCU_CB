<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Imagen;
use App\Models\Inicio;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        $agrupacion = Agrupacion::find($id);
        $publicaciones = Publicacion::all();
        return view('Publicitaria.Administrativa.administrarPublicaciones', compact('agrupacion', 'agrupaciones', 'publicaciones', 'inicio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publicacion = new Publicacion();
        $publicacion->id_agrupacion = $request->id_agrupacion;
        $publicacion->titulo = $request->titulo;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->fecha = $request->fecha;

        // FALTAN LAS IMAGENES Y VIDEOS

        $publicacion->save();

        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();

        return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    function guardar_imgs(Request $request, $id)
    {
        $publicacion = Publicacion::find($id);
        // return $publicacion;

        if ($request->hasFile('imagenes')) {
            $imagenes = $request->file('imagenes');
            foreach ($imagenes as $imagen) {
                $rutaImagen = $imagen->store('imagenes', 'public');
                $urlImagen = Storage::url($rutaImagen);

                // Guardar la ruta de la imagen en la base de datos
                $imagen = new Imagen();
                $imagen->imagen = $urlImagen;
                $imagen->id_publicacion = $publicacion->id_publicacion;
                $imagen->save();
            }
        }

        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();

        return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    function vistaAgregarImg($id)
    {
        $publicacion = Publicacion::find($id);
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    public function delete_img($id)
    {
        $imagen = Imagen::find($id);
        $imagen->delete();

        return redirect()->route('vistaAgreImg', $imagen->id_publicacion);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        $agrupacion = Agrupacion::find($id);
        return view('Publicitaria.Administrativa.crearPublicacion', compact('agrupaciones', 'agrupacion', 'inicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        $publicacion = Publicacion::find($id);
        return view('Publicitaria.Administrativa.editarPublicacion', compact('publicacion', 'agrupaciones', 'inicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::find($id);

        $publicacion->titulo = $request->titulo;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->fecha = $request->fecha;

        $publicacion->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::find($id)->delete();
        return back();
    }
}
