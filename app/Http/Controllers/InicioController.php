<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Imagen;
use App\Models\Inicio;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InicioController extends Controller
{
    public function get_inicio(){
        $inicio = Inicio::findOrFail(1);
        $servicios = Servicio::all();
        $agrupaciones = Agrupacion::all();
        
        return view('Publicitaria.Landing.index', compact('inicio', 'servicios','agrupaciones'));
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

    // Agrupaciones
    function cargar_agrupacion($id){
        $agrupacion = Agrupacion::find($id);
        $inicio = Inicio::findOrFail(1);
        // $imagenes = Imagen::where('id_publicacion', $agrupacion->id_agrupacion);

        return view('Publicitaria.Landing.agrupaciones', compact('agrupacion','inicio'));
    }

}
