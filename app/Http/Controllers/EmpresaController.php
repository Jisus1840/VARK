<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empresas = empresa::all();
        return view("empresas.index", compact("empresas"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("empresas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(['nombre_empresa' => 'required|min:3']);
            
            $empresa = empresa::create([
                'nombre_empresa' => $request->nombre_empresa,
            ]);

            return response('Empresa Agregada Exitosamente',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $empresa = empresa::findOrFail($id);
        return view('empresas.edit', compact("empresa"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        request()->validate(['nombre_empresa' => 'required|min:3']);
            DB::table('empresas')
            ->where('id', $id)
            ->update(['nombre_empresa' => $request->nombre_empresa]);
        return redirect()->back()->with(["mensaje"=>"actualizado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $empresa = empresa::findOrFail($id)->delete();
    }
}
