<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$verificacion = \DB::table('usuarios')->where('identificacion','=',$request->input('Identificacion'))->get(); 
        $pacienteactivo = \DB::connection('sios')->table('Pacientes')->join('CasosActivos','CasosActivos.Paciente','=','Pacientes.Id')
        ->where('Identificacion','=',$request->input('Identificacion'))->select('Pacientes.TipoID', 'Pacientes.Identificacion','Pacientes.Nom1Afil', 'Pacientes.Nom2Afil', 'Pacientes.Ape1Afil', 'Pacientes.Ape2Afil', 'Pacientes.Sexo', 'Pacientes.FechaNac', 'Pacientes.DirAfil', 'Pacientes.TelRes', 'Pacientes.Email')->get();//guery para identificar si el paciente que realiza la encuesta esta activo 
          
        if($pacienteactivo!="[]"){ 
               
            
               $preguntas = \DB::table('preguntas')->select('id','pregunta')->get();
               $opciones = \DB::table('opcions')->select('id','PreguntaID','OpcionTexto')->get();
               $name =  \DB::table('encuesta')->select('NombreEncuesta')->get();
               return view('form-encuesta.preguntas',compact('pacienteactivo','opciones','preguntas','name'));
         
            }else{
                  $verificacion = \DB::connection('sios')->table('Pacientes')->where('Identificacion','=',$request->input('Identificacion'))->select('nombre')->get(); 
                 if($verificacion!="[]"){
                   foreach($verificacion as $ve){
                    alert()->warning('Error de Identificacion',$ve->nombre.' Usted no se encuentra como paciente activo');

                    return view('form-encuesta.principal');
                   }
                 }else{

                  alert()->warning('Error de Identificacion','Usted no se encuentra como paciente activo');

                  return view('form-encuesta.principal');
                 };
            
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
