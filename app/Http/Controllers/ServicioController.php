<?php

namespace App\Http\Controllers;

use App\Models\Agrupacion;
use App\Models\Inicio;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function index(){
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all();  
        $servicios = Servicio::all();  
        return view('Publicitaria.Administrativa.servicios', compact('agrupaciones','servicios','inicio'));
    
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

        return back()->with('mensaje', '¡Se creó el servicio correctamente!');

    }

    public function edit($id)
    {
        $inicio = Inicio::find(1);
        $agrupaciones = Agrupacion::all(); 
        $servicio = Servicio::find($id);
        return view('Publicitaria.Administrativa.editarServicio', compact('servicio','agrupaciones','inicio'));
    }

    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);
        $servicio->titulo = $request->titulo;
        $servicio->descripcion = $request->descripcion;
    
        if ($request->hasFile('imagen')){
            $imgServicio = $request->imagen->store('imagenes', 'public');
            $url = Storage::url($imgServicio);
            $servicio->img = $url;
        }

        $servicio->update();

        return back()->with('mensaje', '¡Se editó el servicio correctamente!');
    }

    public function destroy($id)
    {
        $servicio = Servicio::find($id)->delete();
        return back();
    }

}
