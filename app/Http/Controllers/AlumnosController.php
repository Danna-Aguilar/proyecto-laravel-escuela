<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;


class AlumnosController extends Controller
{
    //
    public function index(){
    $alumnos = Alumno::all();
    $argumentos = array();
    $argumentos['alumnos']=$alumnos;

    return view ('alumnos.index', $argumentos);
    }

    public function create(){
        $argumentos = array();
        return view ('alumnos.create', $argumentos);

    }

    public function store(Request $request){
        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = $request->input('nombre');
        $nuevoAlumno->save();
        //que nos regrese al index
        return redirect()->route('alumnos.index');
    }

    public function edit ($id){
        $alumno = Alumno::find($id);
        $argumentos = array();
        $argumentos['alumno']= $alumno;
        return view ('alumnos.edit',$argumentos);

    }
    public function update(Request $request,$id){
        $alumno =  Alumno::find($id);
        $alumno->nombre = $request->input('nombre');
        $alumno->save();
        //que nos regrese al index
        return redirect()->route('alumnos.edit',$id)
        ->with('exito','El alumno se ha actualizado exitosamente');
    }

}