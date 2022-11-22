<?php

namespace App\Http\Controllers;

use App\Models\sugerencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Exports\SugerenciasExport;
use App\Http\Requests\SugerenciaRequest;
use Maatwebsite\Excel\Facades\Excel;

class SugerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sugerencias.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SugerenciaRequest $request)
    {
        //
        $validated = $request->validated();
        $sugerencia = sugerencia::create($validated);
        return response('sugerencia enviada',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sugerencia  $sugerencia
     * @return \Illuminate\Http\Response
     */
    public function show(sugerencia $sugerencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sugerencia  $sugerencia
     * @return \Illuminate\Http\Response
     */
    public function edit(sugerencia $sugerencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sugerencia  $sugerencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sugerencia $sugerencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sugerencia  $sugerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(sugerencia $sugerencia)
    {
        //
    }

    public function export() 
    {
        return Excel::download(new SugerenciasExport, 'sugerencias.xlsx');
    }
}
