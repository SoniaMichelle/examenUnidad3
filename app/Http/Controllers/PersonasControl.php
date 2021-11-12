<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasControl extends Controller
{
    public function index(Personas $persona)
    {
        $persona = Personas::orderBy('id', 'desc')->paginate();
        return view('personas.index', compact('persona'));
    }
    public function agregar(){
        return view('personas.agregar');
    }
    public function store(Request $request){
        $registros = new Personas();

        $registros->apellido_paterno = $request->apellido_paterno;
        $registros->apellido_materno = $request->apellido_materno;
        $registros->nombre = $request->nombre;
        $registros->fecha_nacimiento = $request->fecha_nacimiento;
        $registros->sexo = $request->sexo;

        $registros->save();
        return redirect()->route('personas.index', $registros);
    }
    /* ACTUALIZAR */
    public function actualizar(Personas $personas){
        return view('personas.actualizar',compact('personas'));
    }
    public function update(Request $request, Personas $personas){
        $personas->apellido_paterno = $request->apellido_paterno;
        $personas->apellido_materno = $request->apellido_materno;
        $personas->nombre = $request->nombre;
        $personas->fecha_nacimiento = $request->fecha_nacimiento;
        $personas->sexo = $request->sexo;

        $personas->save();
        return redirect()->route('personas.index', $personas);
    }
    /* METODO DE ELIMIRA */
    public function eliminar(Personas $personas){
        $personas->delete();
        return redirect()->route('personas.index');
    }

}
