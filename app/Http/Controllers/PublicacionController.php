<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Inicio;
use App\Models\Publicacion;
use Illuminate\Http\Request;

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
        return view('Publicitaria.Administrativa.administrarPublicaciones', compact('agrupacion','agrupaciones','publicaciones','inicio'));
    
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

        return back()->with('Creado','Se guardo la publicacion con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $agrupaciones = Agrupacion::all();
        $agrupacion = Agrupacion::find($id);
        return view('Publicitaria.Administrativa.crearPublicacion', compact('agrupaciones','agrupacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agrupaciones = Agrupacion::all();
        $publicacion = Publicacion::find($id);
        return view('Publicitaria.Administrativa.editarPublicacion',compact('publicacion','agrupaciones'));
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
