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
        {{-- Primer Test --}}
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
                            <td><input id="ext1" type="number"></td>
                            <td>Reservado</td>
                            <td><input id="int1" type="number"></td>
                        </tr>
                        <tr>
                            <td>Actúa y luego piensa</td>
                            <td><input id="ext2" type="number"></td>
                            <td>Piensa y luego actúa</td>
                            <td><input id="int2" type="number"></td>
                        </tr>
                        <tr>
                            <td>Piensa en voz alta</td>
                            <td><input id="ext3" type="number"></td>
                            <td>Piensa en voz baja</td>
                            <td><input id="int3" type="number"></td>
                        </tr>
                        <tr>
                            <td>Tiene mucha energía</td>
                            <td><input id="ext4" type="number"></td>
                            <td>Energía tranquila</td>
                            <td><input id="int4" type="number"></td>
                        </tr>
                        <tr>
                            <td>Prefiere hacer varias cosas a la vez</td>
                            <td><input id="ext5" type="number"></td>
                            <td>Prefiere concentrarse en una cosa</td>
                            <td><input id="int5" type="number"></td>
                        </tr>
                        <tr>
                            <td>Habla más que escucha</td>
                            <td><input id="ext6" type="number"></td>
                            <td>Escucha más que habla</td>
                            <td><input id="int6" type="number"></td>
                        </tr>
                        <tr>
                            <td>Es fácil de conocer</td>
                            <td><input id="ext7" type="number"></td>
                            <td>Lleva una vida muy privada</td>
                            <td><input id="int7" type="number"></td>
                        </tr>
                        <tr>
                            <td>Puede distraerse con facilidad</td>
                            <td><input id="ext8" type="number"></td>
                            <td>Gran capacidad de concentración</td>
                            <td><input id="int8" type="number"></td>
                        </tr>
                        <tr>
                            <td>Le gusta rodearse</td>
                            <td><input id="ext9" type="number"></td>
                            <td>Se siente a gusto a solas</td>
                            <td><input id="int9" type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-end">Total Extrovertido [E]</td>
                            <td><input id="ext10" type="number"></td>
                            <td class="text-end">Total introvertido [I]</td>
                            <td><input id="int10" type="number"></td>
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
                            <td><input id="sen1" type="number"></td>
                            <td>Confía en sus intintos</td>
                            <td><input id="intu1" type="number"></td>
                        </tr>
                        <tr>
                            <td>Realista, ve lo que es</td>
                            <td><input id="sen2" type="number"></td>
                            <td>Imaginativo, ve lo que podría ser</td>
                            <td><input id="intu2" type="number"></td>
                        </tr>
                        <tr>
                            <td>Utiliza destrezas ya aprendidas</td>
                            <td><input id="sen3" type="number"></td>
                            <td>Prefiere desarrollar nuevas destrezas</td>
                            <td><input id="intu3" type="number"></td>
                        </tr>
                        <tr>
                            <td>Prefiere instrucciones detalladas</td>
                            <td><input id="sen4" type="number"></td>
                            <td>Gusta descubrir las cosas por si mismo</td>
                            <td><input id="intu4" type="number"></td>
                        </tr>
                        <tr>
                            <td>Ve detalles y recuerda hechos</td>
                            <td><input id="sen5" type="number"></td>
                            <td>Percibe cualquier cosa nueva o diferente</td>
                            <td><input id="intu5" type="number"></td>
                        </tr>
                        <tr>
                            <td>Admira soluciones prácticas</td>
                            <td><input id="sen6" type="number"></td>
                            <td>Admira ideas creativas</td>
                            <td><input id="intu6" type="number"></td>
                        </tr>
                        <tr>
                            <td>Se concentra en hechos específicos</td>
                            <td><input id="sen7" type="number"></td>
                            <td>Tiene ideas y visón de conjunto</td>
                            <td><input id="intu7" type="number"></td>
                        </tr>
                        <tr>
                            <td>Trabaja a un ritmo uniforme</td>
                            <td><input id="sen8" type="number"></td>
                            <td>Trabaja en ráfagas de energía</td>
                            <td><input id="intu8" type="number"></td>
                        </tr>
                        <tr>
                            <td>Vive en el aquí y el ahora</td>
                            <td><input id="sen9" type="number"></td>
                            <td>Piensa en las implicaciones futuras</td>
                            <td><input id="intu9" type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tfoot>
                            <tr>
                                <td class="text-end">Total Sensorial [S]</td>
                                <td><input id="sen10" type="number"></td>
                                <td class="text-end">Total Intuitivo [N]</td>
                                <td><input id="intu10" type="number"></td>
                            </tr>
                        </tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
        {{-- Tercer test --}}
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h2>3. Actitud y toma de decisiones</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Racional</th>
                            <th>Puntos</th>
                            <th>Emocional</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiende a ver defectos ajenos</td>
                            <td><input id="rac1" type="number"></td>
                            <td>Tiende a ver cualidades ajenas</td>
                            <td><input id="emo1" type="number"></td>
                        </tr>
                        <tr>
                            <td>Se convence con la lógica</td>
                            <td><input id="rac2" type="number"></td>
                            <td>Se convence por las sensaciones</td>
                            <td><input id="emo2" type="number"></td>
                        </tr>
                        <tr>
                            <td>Aparenta ser frío y reservado</td>
                            <td><input id="rac3" type="number"></td>
                            <td>Aparenta ser cálido y amistoso</td>
                            <td><input id="emo3" type="number"></td>
                        </tr>
                        <tr>
                            <td>Toma decisiones objetivamente</td>
                            <td><input id="rac4" type="number"></td>
                            <td>Decide por sus valores y sensaciones</td>
                            <td><input id="emo4" type="number"></td>
                        </tr>
                        <tr>
                            <td>No toma las cosas personalmente</td>
                            <td><input id="rac5" type="number"></td>
                            <td>Toma muchas cosas personalmente</td>
                            <td><input id="emo5" type="number"></td>
                        </tr>
                        <tr>
                            <td>Es motivado por las metas</td>
                            <td><input id="rac6" type="number"></td>
                            <td>Es motivado por el reconocimiento</td>
                            <td><input id="emo6" type="number"></td>
                        </tr>
                        <tr>
                            <td>Honesto y directo</td>
                            <td><input id="rac7" type="number"></td>
                            <td>Diplomático y con mucho tacto</td>
                            <td><input id="emo7" type="number"></td>
                        </tr>
                        <tr>
                            <td>Valora la honestidad y la justicia</td>
                            <td><input id="rac8" type="number"></td>
                            <td>Valora la armonía y la compasión</td>
                            <td><input id="emo8" type="number"></td>
                        </tr>
                        <tr>
                            <td>Argumenta o debate por diversión</td>
                            <td><input id="rac9" type="number"></td>
                            <td>Evita discusiones y conflictos</td>
                            <td><input id="emo9" type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tfoot>
                            <tr>
                                <td class="text-end">Total Racional [T]</td>
                                <td><input id="rac10" type="number"></td>
                                <td class="text-end">Total Emocional [F]</td>
                                <td><input id="emo10" type="number"></td>
                            </tr>
                        </tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
        {{-- Cuarto test --}}
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h2>4. Ambiente de trabajo, estilo de vida en el entorno e interacción</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Calificador</th>
                            <th>Puntos</th>
                            <th>Perceptivo</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trabajar primero, jugar después</td>
                            <td><input id="cal1" type="number"></td>
                            <td>Jugar primero, trabajar después</td>
                            <td><input id="per1" type="number"></td>
                        </tr>
                        <tr>
                            <td>Prefiere terminar proyectos</td>
                            <td><input id="cal2" type="number"></td>
                            <td>Prefiere empezar proyectos</td>
                            <td><input id="per2" type="number"></td>
                        </tr>
                        <tr>
                            <td>Se siente a gusto llevando sus agendas</td>
                            <td><input id="cal3" type="number"></td>
                            <td>Desea la libertad de la espontaneidad</td>
                            <td><input id="per3" type="number"></td>
                        </tr>
                        <tr>
                            <td>Le gusta tomar decisiones</td>
                            <td><input id="cal4" type="number"></td>
                            <td>Pospoone algunas decisiones, si puede</td>
                            <td><input id="per4" type="number"></td>
                        </tr>
                        <tr>
                            <td>Presta atención al tiempo, putualidad</td>
                            <td><input id="cal5" type="number"></td>
                            <td>Menos conciente del tiempo, impuntual</td>
                            <td><input id="per5" type="number"></td>
                        </tr>
                        <tr>
                            <td>Le gusta hacer y atenerse a planes</td>
                            <td><input id="cal6" type="number"></td>
                            <td>Le gusta la flexibilidad en los planes</td>
                            <td><input id="per6" type="number"></td>
                        </tr>
                        <tr>
                            <td>Quiere que las cosas se decidan</td>
                            <td><input id="cal7" type="number"></td>
                            <td>Quiere tener opciones abiertas</td>
                            <td><input id="per7" type="number"></td>
                        </tr>
                        <tr>
                            <td>Serio y convencional</td>
                            <td><input id="cal8" type="number"></td>
                            <td>Relajado y poco convencional</td>
                            <td><input id="per8" type="number"></td>
                        </tr>
                        <tr>
                            <td>Justifica la mayoría de las reglas</td>
                            <td><input id="cal9" type="number"></td>
                            <td>Cuestiona muchas reglas</td>
                            <td><input id="per9" type="number"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tfoot>
                            <tr>
                                <td class="text-end">Total Calificado[J]</td>
                                <td><input id="cal10" type="number"></td>
                                <td class="text-end">Total Perceptivo [P]</td>
                                <td><input id="per10" type="number"></td>
                            </tr>
                        </tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
