<?php

namespace App\Http\Controllers;
use DB;
use App\Alumno;
use App\Grupo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AlumnosController extends Controller
{
     
    public function editaalumno( $id_alumno)
    {
        $alumno = Alumno::where('id_alumno', $id_alumno)->first();
        return view('editaalumno',['alumno' => $alumno,]);
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id_alumno' => 'required',
            'nombre' => 'required|max:50', 
            'apellido_p' => 'required|max:50', 
            'apellido_m' => 'max:50', 
            'edad' => 'required|max:2',
            'telefono' => 'max:50', 
            'correo' => 'required|max:50',  
        ]);
        $id_alumno= $request->id_alumno;
        $nombre= $request->nombre;
        $apellido_p= $request->apellido_p;
        $apellido_m= $request->apellido_m;
        $edad= $request->edad;
        $telefono= $request->telefono;
        $correo= $request->correo;
        Alumno::where('id_alumno',$id_alumno)->first()
        ->update(['id_alumno' => $id_alumno, 'nombre' => $nombre,
                'apellido_p' =>$apellido_p, 'apellido_m' => $apellido_m,
                'edad' => $edad, 'telefono'=>$telefono, 'correo'=>$correo]);
        return redirect('index');
    }
    public function borrar($id_estudiante)
    {
        Alumno::destroy($id_estudiante);
        return redirect('index');
    }
}