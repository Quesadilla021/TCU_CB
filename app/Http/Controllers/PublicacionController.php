<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Imagen;
use App\Models\Inicio;
use App\Models\Publicacion;
use App\Models\Video;
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

    // public function index_dos($id)
    // {
    //     $inicio = Inicio::find(1);
    //     $agrupaciones = Agrupacion::all();
    //     $agrupacion = Agrupacion::find($id);
    //     $publicaciones = Publicacion::all();
    //     $mensaje = '¡Se realizó creó la publicación correctamente!';
    //     return view('Publicitaria.Administrativa.administrarPublicaciones', compact('agrupacion', 'agrupaciones', 'publicaciones', 'inicio'))->with('mensaje',$mensaje);
    // }

    // public function index_dos(Request $request, $id)
    // {
    //     $inicio = Inicio::find(1);
    //     $agrupaciones = Agrupacion::all();
    //     $agrupacion = Agrupacion::find($id);
    //     $publicaciones = Publicacion::all();

    //     $tipo = $request->tipo;

    //     if ($tipo == 1) {
    //         // creó == 1 
    //         $mensaje = '¡Se creó la publicación correctamente!';
    //         return view('Publicitaria.Administrativa.administrarPublicaciones', compact('agrupacion', 'agrupaciones', 'publicaciones', 'inicio'))->with('mensaje', $mensaje);
    //     } elseif ($tipo == 2) {
    //         // editó == 1 
    //         $mensaje = '¡Se editó la publicación correctamente!';
    //         return view('Publicitaria.Administrativa.administrarPublicaciones', compact('agrupacion', 'agrupaciones', 'publicaciones', 'inicio'))->with('mensaje', $mensaje);
    //     }
    // }

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
        $publicacion->link = $request->link;
        $publicacion->fecha = $request->fecha;

        // FALTAN LAS IMAGENES Y VIDEOS

        $publicacion->save();

        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();

        return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    // GUARDAR IMAGENES Y VIDEOS
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
        $tipo = $request->tipo;

        if ($tipo == 0) {
            // Devuelve vista de agregar
            return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
        } else if ($tipo == 1) {
            // Devuelve vista de editar
            return view('Publicitaria.Administrativa.editarPublicacion', compact('publicacion', 'inicio', 'agrupaciones'));
        }
    }

    function vistaAgregarMulti($id)
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

        return redirect()->route('vistaAgreMulti', $imagen->id_publicacion);
    }

    function guardar_Video(Request $request, $id)
    {

        $publicacion = Publicacion::find($id);
        $video = new Video();
        $video->id_publicacion = $id;
        if ($request->hasFile('imagenMiniatura')) {
            $imgMiniatura = $request->imagenMiniatura->store('imagenes', 'public');
            $urlM = Storage::url($imgMiniatura);
            $video->miniatura = $urlM;
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->video->store('videos', 'public');
            $urlV = Storage::url($videoPath);
            $video->video = $urlV;
        }
        $video->save();
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();

        $tipo = $request->tipo;

        if ($tipo == 0) {
            // Devuelve vista de agregar
            return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
        } else if ($tipo == 1) {
            // Devuelve vista de editar
            return view('Publicitaria.Administrativa.editarPublicacion', compact('publicacion', 'inicio', 'agrupaciones'));
        }
        // return view('Publicitaria.Administrativa.agregarMultimedia', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    public function delete_video($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('vistaAgreMulti', $video->id_publicacion);
    }
    // FINAL GUARDAR IMAGENES Y VIDEOS

    function vistaEditarMultimedia($id)
    {
        $publicacion = Publicacion::find($id);
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        return view('Publicitaria.Administrativa.editarPublicacion', compact('publicacion', 'inicio', 'agrupaciones'));
    }

    public function delete_img_edit($id)
    {
        $imagen = Imagen::find($id);
        $imagen->delete();

        return redirect()->route('vistaEditMulti', $imagen->id_publicacion);
    }

    public function delete_video_edit($id)
    {
        // return $id;
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('vistaEditMulti', $video->id_publicacion);
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
        $publicacion->link = $request->link;
        $publicacion->fecha = $request->fecha;

        $publicacion->update();
        // $inicio = Inicio::find(1);
        // $agrupaciones = Agrupacion::all();

        return redirect()->route('editarPublicacion', $publicacion->id_publicacion);
        // return view('Publicitaria.Administrativa.editarPublicacion', compact('publicacion', 'agrupaciones', 'inicio'));
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
