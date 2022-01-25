<?php

namespace App\Http\Controllers;

use App\Models\Opcion;
use Illuminate\Http\Request;



class respuestasController extends Controller
{
    //
     public function store(Request $request){

    echo($request->input('Nombre'));


      $opciones = Opcion::all();
      for ($i=1; $i <=$request->input('contador') ; $i++) { 
      
        foreach ($opciones as $opcion) {
          if($opcion->id== $request->input('pregunta'.$i)){

          }
             
        }
      } 
      
    
       return view('form-encuesta.principal');
    }
}
