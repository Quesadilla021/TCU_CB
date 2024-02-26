<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InicioController extends Controller
{
    public function get_inicio(){
        $inicio = Inicio::findOrFail(1);
        
        return view('Publicitaria.Landing.index', compact('inicio'));
    }

    public function updateInicio(Request $request){
        $inicio = Inicio::findOrFail(1);

        if ($request->filled('titulo')) {
            $inicio->titulo = $request->titulo;
        }

        if ($request->hasFile('imagenFondo')){
            $imgFondo = $request->imagenFondo->store('imagenes', 'public');
            $urlF = Storage::url($imgFondo);
            $inicio->fondo = $urlF;
        }

        if ($request->hasFile('imagenLogo')){
            $imgLogo = $request->imagenLogo->store('imagenes', 'public');
            $urlL = Storage::url($imgLogo);
            $inicio->logo = $urlL;
        }


        $inicio->save();

        return back();
    }
}
