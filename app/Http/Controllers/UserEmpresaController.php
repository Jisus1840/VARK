<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\empresa;
use App\Models\userEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empresa_usuario = userEmpresa::all();
        return view("user_empresa.index", compact("empresa_usuario"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = empresa::all();
        $usuarios = User::where('isAdmin', 0)->get();
        return view("user_empresa.create", compact("empresas", "usuarios"));
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

        request()->validate(['empresaId' => 'required', 'userId' => 'required']);

        $userEmpresa = userEmpresa::create([
            "empresaId" => $request->empresaId,
            "userId" => $request->userId,
        ]);
        return response('Usuario Asignado Exitosamente', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userEmpresa  $userEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(userEmpresa $userEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userEmpresa  $userEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $userEmpresa = userEmpresa::findOrFail($id);
        $empresas = empresa::all();
        $usuarios = User::where('isAdmin', 0)->get();
        return view("user_empresa.edit", compact("userEmpresa", "empresas", "usuarios"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userEmpresa  $userEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //

        request()->validate(['empresaId' => 'required', 'userId' => 'required']);

        DB::table()
            ->where('id', $id)
            ->update(['empresaId' => $request->empresaId,'userId'=> $request->userId]);;
        $userEmpresa = userEmpresa::create([
            "empresaId" => $request->empresaId,
            "userId" => $request->userId,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userEmpresa  $userEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(userEmpresa $userEmpresa)
    {
        //
    }
}
