<?php

namespace App\Http\Controllers;

use App\Models\Opcion;
use App\Models\Pregunta;
use Illuminate\Http\Request;



class respuestasController extends Controller
{
    //
     public function store(Request $request){

    $paciente = \DB::table('usuarios')->where('Identificacion','=',$request->input('Identificacion'))->get();
    if ($paciente=="[]") {
      \DB::table('usuarios')->insert([
        'Identificacion' => $request->input('Identificacion'),
        'TipoDocumento' => $request->input('TipoID'),
      ]);
      \DB::table('usuarios_datos')->insert([
        'UsuarioIdentificacion' => $request->input('Identificacion'),
        'Nombre' => $request->input('Nombre'),
        'Apellido' => $request->input('Apellido'),
        'correo' => $request->input('Email'),
        'Telefono' => $request->input('Telefono'),
      ]);
    }
    \DB::table('encuestas_realizadas')->insert([
      'UsuarioID' => $request->input('Identificacion'),
      'EncuestaNombre' => $request->input('EncuestaNombre'),
      'Fecha' => $request->input('Fecha'),
    ]);
    

      $preguntas = Pregunta::all();
      foreach ($preguntas as $pregunta) {
       
        \DB::table('respuestas')->insert([
          'P_ID' => $pregunta->id,
          'O_ID' => $request->input($pregunta->id),
          'U_ID' => $request->input('Identificacion'),
          'FE' => $request->input('Fecha'),
         ]);
      }
      /*foreach ($opciones as $opcion) {
        if($request->input($opcion->PreguntaID)==$opcion->id){
         echo('pregunta id:'.$opcion->PreguntaID);
         echo('respuesta id:'.$opcion->id);
         \DB::table('respuestas')->insert([
          'P_ID' => $request->input($opcion->PreguntaID),
          'O_ID' => $request->input($opcion->id),
          'U_ID' => $request->input('Identificacion'),
          'FE' => $request->input('Fecha'),
         ]);      
        }
     }*/
      
    
       return view('form-encuesta.principal');
    }
}
