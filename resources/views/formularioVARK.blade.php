@extends('layouts.base_html')

{{-- Titulo --}}
@section('title')
    Formulario VARK
@endsection

@section('content')
    {{-- Contenido --}}
    <div class="container mt-3">
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <h1>Formulario VARK</h1>
            </div>
        </div>
        <form action="">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>1. Usted cocinará algo especial para su familia. Usted haría</h2>
                        <ul>
                            <li><input value="A" id="1" type="radio" name="respuesta"> a) Preguntar a amigos por
                                sugerencias.
                            </li>
                            <li><input value="V" id="2" type="radio" name="respuesta"> b) Dar una vista al
                                recetario por ideas
                                de las fotos.
                            </li>
                            <li><input value="R" id="3" type="radio" name="respuesta"> c) Usar un libro de
                                cocina donde usted
                                sabe hay una
                                buena
                                receta.</li>
                            <li><input value="K" id="4" type="radio" name="respuesta"> d) Cocinar algo que
                                usted sabe sin la
                                necesidad de
                                instrucciones.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>2. Usted escogerá alimento en un restaurante o un café. Usted haría</h2>
                        <ul>
                            <li><input value="A" id="5" type="radio" name="respuesta"> a) Escuchar al mesero
                                opedir que aigos
                                recomienden
                                opciones.</li>
                            <li><input value="V" id="6" type="radio" name="respuesta"> b) Mirar lo qué otros
                                comen o mirar
                                dibujos de cada
                                platillo.</li>
                            <li><input value="R" id="7" type="radio" name="respuesta"> c) Escoger de las
                                descripciones en el
                                menú.</li>
                            <li><input value="K" id="8" type="radio" name="respuesta"> d) Escoger algo que
                                tienes o has tenido
                                antes.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>3. Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción</h2>
                        <ul>
                            <li><input value="A" id="9" type="radio" name="respuesta"> a) Un amigo habla acerca
                                de él y te lo
                                recomienda.
                            </li>
                            <li><input value="K" id="10" type="radio" name="respuesta"> b) Tienes historias
                                reales,
                                experiencias, ejemplos.
                            </li>
                            <li><input value="R" id="11" type="radio" name="respuesta"> c) Leyendo rápidamente
                                partes de él.
                            </li>
                            <li><input value="V" id="12" type="radio" name="respuesta"> d) El diseño de la pasta
                                es atractivo.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>4. Usted ha terminado una competencia o un examen y le gustaría tener alguna retroalimentación.
                            Te
                            gustaría retroalimentación</h2>
                        <ul>
                            <li><input value="R" id="13" type="radio" name="respuesta"> a) Usando descripciones
                                escrítas de los
                                resultados.
                            </li>
                            <li><input value="K" id="14" type="radio" name="respuesta"> b) Usando ejemplos de lo
                                que usted ha
                                hecho.</li>
                            <li><input value="V" id="15" type="radio" name="respuesta"> c) Usando gráficos que
                                muestran lo que
                                usted ha
                                logrado.
                            </li>
                            <li><input value="A" id="16" type="radio" name="respuesta"> d) De alguien que habla
                                por usted.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>5. Usted tiene un problema con la rodilla. Usted preferiría que el doctor:</h2>
                        <ul>
                            <li><input value="K" id="17" type="radio" name="respuesta"> a) Use un modelo de
                                plástico y te
                                enseñe o que está
                                mal.
                            </li>
                            <li><input value="R" id="18" type="radio" name="respuesta"> b) Te de una página de
                                internet o algo
                                para leer.</li>
                            <li><input value="A" id="19" type="radio" name="respuesta"> c) Te describa lo qué
                                está mal.</li>
                            <li><input value="V" id="20" type="radio" name="respuesta"> d) Te enseñe un diagrama
                                lo que está
                                mal.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>6. Usted está a punto de comprar una cámara digital o teléfono o móvil. ¿Aparte del precio qué
                            más
                            influirá en tomar tu decisión?:</h2>
                        <ul>
                            <li><input value="K" id="21" type="radio" name="respuesta"> a) Probándolo.
                            </li>
                            <li><input value="V" id="22" type="radio" name="respuesta"> b) Es un diseño
                                moderno y se mira bien.
                            </li>
                            <li><input value="R" id="23" type="radio" name="respuesta"> c) Leer los detalles
                                acerca de sus
                                características.
                            </li>
                            <li><input value="A" id="24" type="radio" name="respuesta"> d) El vendedor me
                                informa acerca de sus
                                características.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>7. Usted no está seguro como se deletrea trascendente o tracendente ¿Usted que haria?:</h2>
                        <ul>
                            <li><input value="K" id="25" type="radio" name="respuesta"> a) Escribir ambas
                                palabras en un papel
                                y escoja una.
                            </li>
                            <li><input value="A" id="26" type="radio" name="respuesta"> b) Pienso cómo suena
                                cada palabra y
                                escojo una.</li>
                            <li><input value="R" id="27" type="radio" name="respuesta"> c) Busco la palabra
                                en un
                                diccionario.</li>
                            <li><input value="V" id="28" type="radio" name="respuesta"> d) Veo la palabra en
                                mi mente y
                                escojo según como la
                                veo.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>8. Me gustan páginas de Internet que tienen:</h2>
                        <ul>
                            <li><input value="R" id="29" type="radio" name="respuesta"> a) Interesantes
                                descripciones
                                escritas, listas y
                                explicaciones.
                            </li>
                            <li><input value="V" id="30" type="radio" name="respuesta"> b) Diseño
                                interesante y
                                características visuales.</li>
                            <li><input value="K" id="31" type="radio" name="respuesta"> c) Cosas que con un
                                click pueda
                                cambiar o examinar.
                            </li>
                            <li><input value="A" id="32" type="radio" name="respuesta"> d) Canales donde
                                puedo oír música,
                                programas de radio
                                o
                                entrevistas.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>9. Usted está planeando unas vacaciones para un grupo. Usted quiere alguna observación de ellos
                            acerca del plan. Usted qué haría:</h2>
                        <ul>
                            <li><input value="V" id="33" type="radio" name="respuesta"> a) Usa un mapa o
                                página de Internet
                                para mostrarles
                                los
                                lugares.
                            </li>
                            <li><input value="A" id="34" type="radio" name="respuesta"> b) Describe algunos
                                de los puntos
                                sobresalientes.</li>
                            <li><input value="R" id="35" type="radio" name="respuesta"> c) Darles una copia
                                del itinerario
                                impreso.</li>
                            <li><input value="K" id="36" type="radio" name="respuesta"> d) Llamarles por
                                teléfono o mandar
                                mensaje por
                                correo
                                electrónico.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>10. Usted está usando un libreo, disco compacto o página de Internet para aprender a tomar fotos
                            con
                            su cámara digital nueva. Usted le gustaría tener:</h2>
                        <ul>
                            <li><input value="A" id="37" type="radio" name="respuesta"> a) Una oportunidad
                                de hacer
                                preguntas acerca de la
                                cámara y sus características.
                            </li>
                            <li><input value="V" id="38" type="radio" name="respuesta"> b) Esquemas o
                                diagramas que muestra
                                la cámara y la
                                función de cada parte.</li>
                            <li><input value="K" id="39" type="radio" name="respuesta"> c) Ejemplos de
                                buenas y malas fotos
                                y cómo
                                mejorarlas.
                            </li>
                            <li><input value="R" id="40" type="radio" name="respuesta"> d) Aclarar las
                                instrucciones
                                escritas con listas y
                                puntos sobre qué hacer.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>11. Usted quiere aprender un programa nuevo, habilidad o juego en una computadora. Usted qué
                            hace:
                        </h2>
                        <ul>
                            <li><input value="A" id="41" type="radio" name="respuesta"> a) Hablar con gente
                                que sabe acerca
                                del programa.
                            </li>
                            <li><input value="R" id="42" type="radio" name="respuesta"> b) Leer las
                                instrucciónes que vienen
                                en el programa.
                            </li>
                            <li><input value="V" id="43" type="radio" name="respuesta"> c) Seguir los
                                esquemas en el libro
                                que acompaña el
                                programa.
                            </li>
                            <li><input value="K" id="44" type="radio" name="respuesta"> d) Use los controles
                                o el teclado.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>12. Estás ayudando a alguien que quiere ir al aeropuerto, al centro del pueblo o la estación del
                            ferrocarril. Usted hace:
                        </h2>
                        <ul>
                            <li><input value="K" id="45" type="radio" name="respuesta"> a) Va con la
                                persona.
                            </li>
                            <li><input value="R" id="46" type="radio" name="respuesta"> b) Anote las
                                direcciones en un papel
                                (sin mapa).
                            </li>
                            <li><input value="A" id="47" type="radio" name="respuesta"> c) Les dice las
                                direcciones.
                            </li>
                            <li><input value="V" id="48" type="radio" name="respuesta"> d) Les dibuja un
                                croquis o les da un
                                mapa.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>13. Recuerde un momento en su vida en que Usted aprendió a hacer algo nuevo. Trate de evitar
                            escoger
                            una destreza física, como andar en bicicleta. Usted aprendió mejor:
                        </h2>
                        <ul>
                            <li><input value="K" id="49" type="radio" name="respuesta"> a) Viendo una
                                demostración.
                            </li>
                            <li><input value="R" id="50" type="radio" name="respuesta"> b) Con instrucciones
                                escritas, en un
                                manual o libro
                                de
                                texto.
                            </li>
                            <li><input value="A" id="51" type="radio" name="respuesta"> c) Escuchando a
                                alguien explicarlo o
                                haciendo
                                preguntas.
                            </li>
                            <li><input value="V" id="52" type="radio" name="respuesta"> d) Con esquemas y
                                diagramas o pistas
                                visuales.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>14. Usted prefiere un maestro o conferencia que use:
                        </h2>
                        <ul>
                            <li><input value="K" id="53" type="radio" name="respuesta"> a) Demostraciones,
                                modelos, sesiones
                                pácticas.
                            </li>
                            <li><input value="R" id="54" type="radio" name="respuesta"> b) Folletos, libros
                                o lecturas.
                            </li>
                            <li><input value="V" id="55" type="radio" name="respuesta"> c) Diagramas,
                                esquemas o gráficas.
                            </li>
                            <li><input value="A" id="56" type="radio" name="respuesta"> d) Preguntas y
                                respuestas, pláticas
                                y oradores
                                invitados.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>15. Un grupo de turistas quiere aprender acerca de parques o reservas:
                        </h2>
                        <ul>
                            <li><input value="K" id="57" type="radio" name="respuesta"> a) Los acompaña a un
                                parque o
                                reserva natural.
                            </li>
                            <li><input value="R" id="58" type="radio" name="respuesta"> b) Les da un libro o
                                folleto acerca
                                de parques o
                                reservas naturales.
                            </li>
                            <li><input value="A" id="59" type="radio" name="respuesta"> c) Les da una
                                plática acerca de
                                parques o reservas
                                naturales.
                            </li>
                            <li><input value="V" id="60" type="radio" name="respuesta"> d) Les muestra
                                imágines de Internet,
                                fotos o libros
                                con
                                dibujos.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group">
                        <h2>16. Usted tiene que hacer un discurso para una conferencia u ocasión especial:
                        </h2>
                        <ul>
                            <li><input value="R" id="61" type="radio" name="respuesta"> a) Escriba el
                                discurso y
                                aprendérselo leyéndo varias
                                veces.
                            </li>
                            <li><input value="K" id="62" type="radio" name="respuesta"> b) Reunir muchos
                                ejemplos e
                                historias para hacer el
                                discurso verdadero y práctico.
                            </li>
                            <li><input value="A" id="63" type="radio" name="respuesta"> c) Escribir algunas
                                palabras claves
                                y practicar el
                                discurso repetida veces.
                            </li>
                            <li><input value="V" id="64" type="radio" name="respuesta"> d) Hacer diagramas o
                                esquemas que te
                                ayuden a
                                explicar
                                las cosas.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-md-12">
                <button type="button" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </div>
@endsection
