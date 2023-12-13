<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function getTareas(){
        $tareas = Tarea::all();
        if (is_null($tareas)){
            return response()->json(["message"=>"No hay registros."],404);
        }
        return response()->json($tareas,200);
    }
    public function getTareaID(Request $request){
        $tarea = Tarea::find($request->id);
        if (is_null($tarea)){
            return response()->json(["message"=>"Registro no encontrado."],404);
        }
        return response()->json($tarea,200);
    }
    public function InsertTarea(Request $request){
        $tarea = New Tarea();
        $tarea->dni = $request->dni;
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha = date("Y-m-d H:i:s");
        $tarea->estado = 1;//pendiente

        $tarea->save();
        return response()->json(["message"=>"Registro Exitoso."],200);
    }
    public function UpdateTarea(Request $request){
        $tarea = Tarea::find($request->id);    
        if (is_null($tarea)){
            return response()->json(["message"=>"Registro no encontrado."],404);
        }
        $tarea->dni = $request->dni;
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha = date("Y-m-d H:i:s");
        $tarea->estado = 2;//en progreso

        $tarea->save();
        return response()->json(["message"=>"El registro ".$request->id." fue actualizado."],200);
    }
    public function DeleteTarea(Request $request){
        $tarea = Tarea::find($request->id);
        if (is_null($tarea)){
            return response()->json(["message"=>"Registro no encontrado."],404);
        }
        $tarea->estado = 0; //eliminado
        
        $tarea->save();
        return response()->json(["message"=>"Registro eliminado."],200);
    }
}
