<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Encuesta;

class EncuestasController extends Controller
{
    public function store(Request $request) {
        $respuesta = array();
        $respuesta['exito'] = false;

        $nuevaEncuesta = new Encuesta();

        if ($request->input('id_pregunta1')){
            $nuevaEncuesta->id_pregunta1 = $request->input('id_pregunta1');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 1";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_pregunta2')){
            $nuevaEncuesta->id_pregunta2 = $request->input('id_pregunta2');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 2";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_pregunta3')){
            $nuevaEncuesta->id_pregunta3 = $request->input('id_pregunta3');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 3";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_pregunta4')){
            $nuevaEncuesta->id_pregunta4 = $request->input('id_pregunta4');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 4";
            return response()->json($respuesta,400);
        }
       
        if ($request->input('id_pregunta5') != NULL) {
            $nuevaEncuesta->id_pregunta5 = $request->input('id_pregunta5');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 5";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_pregunta6') != NULL) {
            $nuevaEncuesta->id_pregunta6 = $request->input('id_pregunta6');
        } else {
            $respuesta['mensaje'] = "Responder la pregunta 6";
            return response()->json($respuesta,400);
        }
        
        try {
            if ($nuevaEncuesta->save()) {
                $respuesta['exito'] = true;
            }
        }
        catch (\Exception $e) {
            $respuesta["mensaje"] = $e->getMessage();
            return response()->json($respuesta, 500);
        }

        return $respuesta;
    }
}
