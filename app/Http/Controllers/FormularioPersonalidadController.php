<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\FormularioPersonalidad;

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
        $validar['userId'] = Auth()->user()->id;
        // dd($validar);
        $data = FormularioPersonalidad::create($validar);

        // $this->generarPdfPersonalidad($data->id);
        return response()->json($data);
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

    public function generarPdfPersonalidad($id)
    {
        $data = FormularioPersonalidad::select(
            'personalidades.id',
            'name',
            'resultado'
        )
            ->join('users', 'users.id','personalidades.userId')
            ->find($id);

        $nombreArchivo = 'FormularioPersonalidad' . $data['name'] . '' . $data['id'];

        $dompdf = Pdf::loadView("generarPdfPersonalidad", [
            "nombre" => $data['name'],
            "resultado" => $data['resultado']
        ])->save("../public/docs/{$nombreArchivo}");

        return $dompdf->stream($nombreArchivo);
    }
}
