<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pacientesactivos = \DB::connection('sios')->table('Pacientes')->where('Identificacion','=',$request->input('Identificacion'))->get();//guery para identificar si el paciente que realiza la encuesta esta activo 
         if(!is_null($pacientesactivos)){
            $preguntas = \DB::table('pregunta')->select('id','pregunta')->get();
            $opciones = \DB::table('opcion')->select('id','PreguntaID','OpcionTexto')->get();
   
            return view('form-encuesta.preguntas',compact('ititpacientesactivos','opciones','preguntas'));
          echo('entre en el if');
         }else{
           
         };
        
        
       
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
