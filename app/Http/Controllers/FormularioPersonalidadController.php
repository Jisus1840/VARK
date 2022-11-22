<?php

namespace App\Http\Controllers;

use App\Models\FormularioPersonalidad;
use Illuminate\Http\Request;

class FormularioPersonalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formularioPersonalidad');
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
        $validar = $request->validate(['resultado' => ['regex:/(E|I)(S|N)(T|F)(J|P)/']]);
        $validar['userId'] = 1;
        // dd($validar);
        FormularioPersonalidad::create($validar);
        return response()->json($validar);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormularioPersonalidad  $formularioPersonalidad
     * @return \Illuminate\Http\Response
     */
    public function show(FormularioPersonalidad $formularioPersonalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormularioPersonalidad  $formularioPersonalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(FormularioPersonalidad $formularioPersonalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormularioPersonalidad  $formularioPersonalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormularioPersonalidad $formularioPersonalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormularioPersonalidad  $formularioPersonalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormularioPersonalidad $formularioPersonalidad)
    {
        //
    }
}
