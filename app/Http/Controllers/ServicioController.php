<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function index(){
        $agrupaciones = Agrupacion::all();  
        $servicios = Servicio::all();  
        return view('Publicitaria.Administrativa.servicios', compact('agrupaciones','servicios'));
    
    }

    public function store(Request $request) {
        $servicio = new Servicio();
        $servicio->titulo = $request->titulo;
        $servicio->descripcion = $request->descripcion;
        
        if ($request->hasFile('imagen')){
            $img = $request->imagen->store('imagenes', 'public');
            $url = Storage::url($img);
            $servicio->img = $url;
        }

        $servicio->save();

        return back();

    }
}
