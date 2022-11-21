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
                <h2>1. Energia, focalización y actitud vital</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Extrovertido</th>
                            <th>Puntos</th>
                            <th>Introvertido</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emprendedor y etusiasta</td>
                            <td><input type="number"></td>
                            <td>Reservado</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Actúa y luego piensa</td>
                            <td><input type="number"></td>
                            <td>Piensa y luego actúa</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Piensa en voz alta</td>
                            <td><input type="number"></td>
                            <td>Piensa en voz baja</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Tiene mucha energía</td>
                            <td><input type="number"></td>
                            <td>Energía tranquila</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Prefiere hacer varias cosas a la vez</td>
                            <td><input type="number"></td>
                            <td>Prefiere concentrarse en una cosa</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Habla más que escucha</td>
                            <td><input type="number"></td>
                            <td>Escucha más que habla</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Es fácil de conocer</td>
                            <td><input type="number"></td>
                            <td>Lleva una vida muy privada</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Puede distraerse con facilidad</td>
                            <td><input type="number"></td>
                            <td>Gran capacidad de concentración</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Le gusta rodearse</td>
                            <td><input type="number"></td>
                            <td>Se siente a gusto a solas</td>
                            <td><input type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-end">Total Extrovertido</td>
                            <td><input type="number"></td>
                            <td class="text-end">Total introvertido</td>
                            <td><input type="number"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        {{-- Segundo test --}}
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h2>2. Manejo de la información y actitud ante el entorno</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Sensorial</th>
                            <th>Puntos</th>
                            <th>Intuitivo</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Confía en la experiencia propia</td>
                            <td><input type="number"></td>
                            <td>Confía en sus intintos</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Realista, ve lo que es</td>
                            <td><input type="number"></td>
                            <td>Imaginativo, ve lo que podría ser</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Utiliza destrezas ya aprendidas</td>
                            <td><input type="number"></td>
                            <td>Prefiere desarrollar nuevas destrezas</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Prefiere instrucciones detalladas</td>
                            <td><input type="number"></td>
                            <td>Gusta descubrir las cosas por si mismo</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Ve detalles y recuerda hechos</td>
                            <td><input type="number"></td>
                            <td>Percibe cualquier cosa nueva o diferente</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Admira soluciones prácticas</td>
                            <td><input type="number"></td>
                            <td>Admira ideas creativas</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Se concentra en hechos específicos</td>
                            <td><input type="number"></td>
                            <td>Tiene ideas y visón de conjunto</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Trabaja a un ritmo uniforme</td>
                            <td><input type="number"></td>
                            <td>Trabaja en ráfagas de energía</td>
                            <td><input type="number"></td>
                        </tr>
                        <tr>
                            <td>Vive en el aquí y el ahora</td>
                            <td><input type="number"></td>
                            <td>Piensa en las implicaciones futuras</td>
                            <td><input type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tfoot>
                            <tr>
                                <td class="text-end">Total Sensorial</td>
                                <td><input type="number"></td>
                                <td class="text-end">Total Intuitivo</td>
                                <td><input type="number"></td>
                            </tr>
                        </tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
