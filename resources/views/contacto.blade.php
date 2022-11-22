@extends('layouts.base_html')

{{-- Titulo --}}
@section('title')
Formulario VARK
@endsection

@section('content')
{{-- Contenido --}}

@include('navbar')

<div class="p-5 m-5 sombrita">

    <h1 class="m-3 text-center">Contacto por correo:</h1>

    <form action="mailto:delabra32@gmail.com?subject=Pagina%20Contacto" method="post" enctype="text/plain">
        <div class="row mt-5">
            <div class="col-md-2 col-xs-0"></div>
            <div class="col-md-4 mb-3">

                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">

            </div>
            <div class="col-md-4 mb-3">

                <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">

            </div>
            <div class="col-md-2 col-xs-0"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-xs-0"></div>
            <div class="col-md-4 mb-3">

                <input type="email" class="form-control" placeholder="Correo" name="correo" id="correo">

            </div>
            <div class="col-md-4 mb-3">

                <input type="tel" class="form-control" placeholder="Teléfono" name="tel" id="tel">

            </div>
            <div class="col-md-2 col-xs-0"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-xs-0"></div>
            <div class="col-md-8 mb-3">

                <textarea type="text" class="form-control" placeholder="Mensaje..." name="msg" id="msg"></textarea>

            </div>
            <div class="col-md-2 col-xs-0"></div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary amarillobtn m-3">ENVIAR</button>
        </div>
    </form>
</div>

@endsection