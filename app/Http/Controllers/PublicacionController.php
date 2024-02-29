<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $agrupaciones = Agrupacion::all();  
        $agrupacion = Agrupacion::find($id);
        return view('Publicitaria.Administrativa.administrarContenido', compact('agrupacion','agrupaciones'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agrupaciones = Agrupacion::all();
        return view('Publicitaria.Administrativa.crearPublicacion', compact('agrupaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
