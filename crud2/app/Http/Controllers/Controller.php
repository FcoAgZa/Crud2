<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Alumno;
use App\Grupo;

class Controller extends BaseController
{
    public function index ()
    {
        $alumnos = Alumno::all();
        $grupos =Grupo::all();
        return view('index', compact('alumnos','grupos'));

    }
    public function registrogrupo()
    {
        return view('registrogrupo');
    }
    public function registrogrupo_datos(Request $request)
    {   
        $validatedData = $request->validate([
            'grupo' => 'required|max:50', 
            'semestre' => 'required',
            'turno' => 'required'
        ]);

        $grupo= new Grupo;
        $grupo->grupo= $request->grupo;
        $grupo->semestre= $request->semestre;
        $grupo->turno= $request->turno;
        $grupo->save();
        return redirect('index');

    }

    public function registroalumno()
    {
        $grupos=Grupo::all();
        return view('registroalumno', compact('grupos'));
    }
    public function registroalumno_datos(Request $request)
    {   
        $validatedData = $request->validate([
            'nombre' => 'required|max:50', 
            'apellido_p' => 'required|max:50', 
            'apellido_m' => 'max:50', 
            'edad' => 'required|max:2',
            'telefono' => 'max:50', 
            'correo' => 'required|max:50',  
            'grupo' => 'required',
        ]);

        $alumno= new Alumno();
        $alumno->nombre= $request->nombre;
        $alumno->apellido_p= $request->apellido_p;
        $alumno->apellido_m= $request->apellido_m;
        $alumno->edad= $request->edad;
        $alumno->telefono= $request->telefono;
        $alumno->correo= $request->correo;
        $alumno->grupo= $request->grupo;
        $alumno->save();
        return redirect('index');

    }
}


