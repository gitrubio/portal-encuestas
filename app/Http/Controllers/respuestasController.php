<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class respuestasController extends Controller
{
    //
     public function store(Request $request){
         $respuesta = new respuesta();
         return $request->all();
        

    }
}
