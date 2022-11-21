@extends('layouts.base_html')

{{-- Titulo --}}
@section('title')
    Test de personalidad
@endsection

@section('content')
    {{-- Contenido --}}
    <div class="container mt-3">
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h1>Test de personalidad</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h3>1. Energia, focalización y actitud vital</h3>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="row mt-1">
                    <div class="col-md-12">
                        <h5>Extrovertido</h5>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Emprender y entusiasta</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Actúa y luego piensa</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Piensa en voz alta</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Tiene mucha energía</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Prefiere hacer varias cosas a la vez</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Habla más que escucha</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Es fácil de conocer</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Puede distearse con facilidad</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <p>Le gusta rodearse de gente</p>
                    </div>
                </div>
            </div>

            {{-- Puntos primer tabla Extrovertido --}}
            <div class="col-md-3">
                <div class="row mt-1">
                    <div class="col-md-12">
                        <h5>Puntos</h5>
                    </div>
                </div>
            </div>

            {{-- Texto para Introvertido --}}
            <div class="col-md-3">
                <div class="row mt-1">
                    <div class="col-md-12">
                        <h5>Introvertido</h5>
                    </div>
                </div>
            </div>

            {{-- Puntos para primer tabla Introvertido --}}
            <div class="col-md-3">
                <div class="row mt-1">
                    <div class="col-md-12">
                        <h5>Puntos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
