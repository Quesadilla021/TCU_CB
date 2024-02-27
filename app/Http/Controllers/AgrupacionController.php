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
        $agrupaciones = Agrupacion::all();  
        return view('Publicitaria.Administrativa.index', compact('agrupaciones'));
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

        if ($request->hasFile('imagenFondo')){
            $imgFondo = $request->fondo->store('imagenes', 'public');
            $urlF = Storage::url($imgFondo);
            $agrupacion->fondo = $urlF;
        }

        if ($request->hasFile('imagenLogo')){
            $imgLogo = $request->logo->store('imagenes', 'public');
            $urlL = Storage::url($imgLogo);
            $agrupacion->logo = $urlL;
        }

        // $imgLogo = time() . '.' . $request->logo->extension();
        // $request->logo->move(public_path('images'), $imgLogo);
        // $agrupacion->img_logo = $imgLogo;

        // $imgFondo = time() . '.' . $request->fondo->extension();
        // $request->fondo->move(public_path('images'), $imgFondo);
        // $agrupacion->img_fondo = $imgFondo;

        $agrupacion->save();

        return back();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
