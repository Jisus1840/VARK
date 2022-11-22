@extends('layouts.base_html')

{{-- Titulo --}}
@section('title')
    Sugerencia
@endsection

@section('content')
    {{-- Contenido --}}
    <div class="container mt-3">
        
        <form action="{{ route('sugerencias.store') }}" method="POST" novalidate>
           @csrf
            <div>
                <input type="text" name="empresaId" id="empresaId" value="1">
                <h1>Sugerencia</h1>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </div>

            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
            <br/>

        <input type="submit" value="enviar">
        </form>
    </div>
@endsection
