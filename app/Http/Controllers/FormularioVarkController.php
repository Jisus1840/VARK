<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioVark;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\FormularioVarkRequest;
use App\Models\vark;

class FormularioVarkController extends Controller
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
        $arreglo = collect([
            'V' => 0,
            'A' => 0,
            'R' => 0,
            'K' => 0,
        ]);
        // var_dump());
        // die;
        foreach ($request->except('_token') as $respuesta) {
            $arreglo[$respuesta] += 1;
        }
        $a = $arreglo->sortDesc()->keys()->first();
        // dd($a);
        // $validated = $request->validated();
        $formularioVark = FormularioVark::create(['respuesta' => $a, 'userId' => Auth()->user()->id]);

        // $pdf = $this->generarPdfVARK($formularioVark->id);

        $formularioVark = FormularioVark::create(['folio' => '0001', 'respuesta' => $a, 'userId' => '1']);
        return response()->json($formularioVark);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormularioVark  $formularioVark
     * @return \Illuminate\Http\Response
     */
    public function show(FormularioVark $formularioVark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormularioVark  $formularioVark
     * @return \Illuminate\Http\Response
     */
    public function edit(FormularioVark $formularioVark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormularioVark  $formularioVark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormularioVark $formularioVark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormularioVark  $formularioVark
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormularioVark $formularioVark)
    {
        //
    }

    public function generarPdfVARK($id)
    {
        $data = FormularioVark::select(
            'varks.id',
            'name',
            'respuesta'
        )
            ->join('users', 'users.id', '=', 'varks.userId')
            ->find($id);

        $nombreArchivo = 'FormularioVARK' . $data['name'] . '' . $data['id'];

        $dompdf = Pdf::loadView("generarPdfVARK", [
            "nombre" => $data['name'],
            "respuesta" => $data['respuesta']
        ])->save("../public/docs/{$nombreArchivo}");

        return $dompdf->stream($nombreArchivo);
    }

    public function varkGraph()
    {
        $data = vark::join('users', 'users.id', '=', 'varks.userId')->selectRaw('varks.respuesta, count(*) as total')->groupBy('varks.respuesta')->get();

        $labels = $data->pluck('respuesta');
        $total = $data->pluck('total');

        return response()->json([$labels, $total]);
    }
}
