<?php

namespace App\Http\Controllers;

use App\Models\personalidad;
use App\Models\vark;
use Illuminate\Http\Request;

class PersonalidadController extends Controller
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
     * @param  \App\Models\personalidad  $personalidad
     * @return \Illuminate\Http\Response
     */
    public function show(personalidad $personalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personalidad  $personalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(personalidad $personalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personalidad  $personalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personalidad $personalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personalidad  $personalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(personalidad $personalidad)
    {
        //
    }

    public function myersBriggsGraph() {
        $data = personalidad::join('users', 'users.id', '=', 'personalidades.userId')->selectRaw('personalidades.respuesta, count(*) as total')->groupBy('personalidades.respuesta')->get();

        $labels = $data->pluck('respuesta');
        $total = $data->pluck('total');

        return response()->json([$labels, $total]);
    }

    public function graph() {
        $vark = vark::count();
        $personalidad = personalidad::count();
        $labels = ['VARK', 'Personalidad'];
        $data = [$vark, $personalidad];

        return response()->json([$labels, $data]);
    }
}
