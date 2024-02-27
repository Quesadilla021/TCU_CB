<?php

namespace App\Http\Controllers;

use App\Models\InicioSesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inicioSesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Publicitaria.Administrativa.inicioSesion');
    }

    public function iniciarsesion(Request $request){
        
        $usuario = InicioSesion::where('email', $request->correo)->where('contrasena', $request->contrasena)->first();

        if ($usuario) {
            // Auth::login($usuario);
            return redirect()->route('admin.index');
        }else {
            return back()->with('mensaje', 'Datos incorrectos');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
