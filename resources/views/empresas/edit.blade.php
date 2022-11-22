@extends('layouts.base_html')

@section('title')
    Empresa
@endsection

@section('content')
@include('layouts.navigation')
<div class="container shadow-lg p-2 mb-5 mt-1 bg-body rounded ">
    <h2 style="text-align:center" class="p-3 fondo">Editar Empresa</h2>

    <form action="{{ route('empresas.update',$empresa->id) }}" class="container-fluid  pt-5 pb-3" method="POST" novalidate>
        @csrf
        @method("PUT")
        @include('empresas.partials.form')
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-outline-primary mb-0 m-0 mt-5" type="button">Actualizar</button>
        </div>
    </form>
</div>
@endsection