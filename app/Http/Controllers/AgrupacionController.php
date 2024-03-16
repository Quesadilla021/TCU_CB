<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgrupacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        return view('Publicitaria.Administrativa.index', compact('agrupaciones', 'inicio'));
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
        $agrupacion = new Agrupacion();
        $agrupacion->nombre = $request->nombre;
        $agrupacion->descripcion = $request->descripcion;


        if ($request->hasFile('imagenFondo')) {
            $imgFondo = $request->imagenFondo->store('imagenes', 'public');
            $urlF = Storage::url($imgFondo);
            $agrupacion->img_fondo = $urlF;
        }

        if ($request->hasFile('imagenLogo')) {
            $imgLogo = $request->imagenLogo->store('imagenes', 'public');
            $urlL = Storage::url($imgLogo);
            $agrupacion->img_logo = $urlL;
        }

        $agrupacion->save();

        return back()->with('mensaje', '¡Se creo la agrupación correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();
        $agrupacion = Agrupacion::find($id);

        return view('Publicitaria.Administrativa.editarAgrupacion', compact('agrupacion', 'agrupaciones', 'inicio'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agrupacion = Agrupacion::find($id);
        $agrupacion->nombre = $request->nombre;
        $agrupacion->descripcion = $request->descripcion;

        if ($request->hasFile('imagenFondo')) {
            $imgFondo = $request->imagenFondo->store('imagenes', 'public');
            $urlF = Storage::url($imgFondo);
            $agrupacion->img_fondo = $urlF;
        }

        if ($request->hasFile('imagenLogo')) {
            $imgLogo = $request->imagenLogo->store('imagenes', 'public');
            $urlL = Storage::url($imgLogo);
            $agrupacion->img_logo = $urlL;
        }

        $agrupacion->update();

        return back()->with('mensaje', '¡Se edito la agrupación correctamente!');;
    }

    /**
     * Remove the specified resource from storage.
     */

     function modal_eliminar($id){
        $agrupacion = Agrupacion::find($id);
        $agrupacionEliminar = [
            'id_agrupacion' => $agrupacion->id_agrupacion,
            'nombre' => $agrupacion->nombre,
            'descripcion' => $agrupacion->descripcion,
            'img_logo' => $agrupacion->img_logo,
            'img_fondo' => $agrupacion->img_fondo
        ];
        
        return $agrupacionEliminar;
    }

    public function destroy($id)
    {
        $agrupacion = Agrupacion::find($id)->delete();
        return redirect()->back();
    }
}
