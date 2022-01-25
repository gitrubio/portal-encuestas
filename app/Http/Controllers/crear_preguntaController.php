<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;


class crear_preguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::all();
        return view('dashboard.index_pregunta', compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.crear_pregunta');
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
        $request->validate([
            'id'=>'required',
            'EncuestaNombre'=>'required',
            'TipoPregunta'=>'required',
            'Pregunta'=>'required',
        ]);
        Pregunta::create($request->all());
        return view('dashboard.index_pregunta');
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
    public function edit(Pregunta $pregunta)
    {
        //
        return view('dashboard.editar_pregunta', compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pregunta $pregunta)
    {
        //
        $request->validate([
            'id'=>'required',
            'EncuestaNombre'=>'required',
            'TipoPregunta'=>'required',
            'Pregunta'=>'required',
        ]);
        Pregunta::update($request->all());
        return view('dashboard.index_pregunta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        //
        $pregunta->delete();
        return view('dashboard.index_pregunta');
    }
}
