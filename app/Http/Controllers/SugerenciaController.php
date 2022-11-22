<?php

namespace App\Http\Controllers;

use App\Models\sugerencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Exports\SugerenciasExport;
use App\Http\Requests\SugerenciaRequest;
use App\Models\User;
use App\Models\userEmpresa;
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
        //obtiene el id del usuario logueado
        $userId = Auth()->user()->id;
        //obtiene el id de la empresa del usuario actual
        $empresa = userEmpresa::where('userId',$userId)->get()->first();
        return view("sugerencias.create", compact("empresa"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresaId' => 'required',
            'mensaje' => 'required',
            'g-recaptcha-response' => ['required', 'string', function ($attribute, $value, $fail) {
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response = \file_get_contents($url);
                $response = json_decode($response);

                if (!$response->success) {
                    $fail($attribute . ' fallo el google reCaptcha, eres un robot!!');
                }
            }]
        ]);

        $sugerencia = sugerencia::create([
            'empresaId' => $request->empresaId,
            'mensaje' => $request->mensaje
        ]);

        return response('sugerencia enviada', 200);
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
