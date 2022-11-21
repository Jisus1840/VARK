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
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>1. Usted cocinará algo especial para su familia. Usted haría</h2>
                    <ul>
                        <li><input type="radio" name="radio1"> a) Preguntar a amigos por sugerencias.</li>
                        <li><input type="radio" name="radio1"> b) Dar una vista al recetario por ideas de las fotos.</li>
                        <li><input type="radio" name="radio1"> c) Usar un libro de cocina donde usted sabe hay una buena
                            receta.</li>
                        <li><input type="radio" name="radio1"> d) Cocinar algo que usted sabe sin la necesidad de
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
                        <li><input type="radio" name="radio2"> a) Escuchar al mesero opedir que aigos recomienden
                            opciones.</li>
                        <li><input type="radio" name="radio2"> b) Mirar lo qué otros comen o mirar dibujos de cada
                            platillo.</li>
                        <li><input type="radio" name="radio2"> c) Escoger de las descripciones en el menú.</li>
                        <li><input type="radio" name="radio2"> d) Escoger algo que tienes o has tenido antes.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>3. Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción</h2>
                    <ul>
                        <li><input type="radio" name="radio3"> a) Un amigo habla acerca de él y te lo recomienda.</li>
                        <li><input type="radio" name="radio3"> b) Tienes historias reales, experiencias, ejemplos.</li>
                        <li><input type="radio" name="radio3"> c) Leyendo rápidamente partes de él.</li>
                        <li><input type="radio" name="radio3"> d) El diseño de la pasta es atractivo.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>4. Usted ha terminado una competencia o un examen y le gustaría tener alguna retroalimentación. Te
                        gustaría retroalimentación</h2>
                    <ul>
                        <li><input type="radio" name="radio4"> a) Usando descripciones escrítas de los resultados.</li>
                        <li><input type="radio" name="radio4"> b) Usando ejemplos de lo que usted ha hecho.</li>
                        <li><input type="radio" name="radio4"> c) Usando gráficos que muestran lo que usted ha logrado.
                        </li>
                        <li><input type="radio" name="radio4"> d) De alguien que habla por usted.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>5. Usted tiene un problema con la rodilla. Usted preferiría que el doctor:</h2>
                    <ul>
                        <li><input type="radio" name="radio5"> a) Use un modelo de plástico y te enseñe o que está mal.
                        </li>
                        <li><input type="radio" name="radio5"> b) Te de una página de internet o algo para leer.</li>
                        <li><input type="radio" name="radio5"> c) Te describa lo qué está mal.</li>
                        <li><input type="radio" name="radio5"> d) Te enseñe un diagrama lo que está mal.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>6. Usted está a punto de comprar una cámara digital o teléfono o móvil. ¿Aparte del precio qué más
                        influirá en tomar tu decisión?:</h2>
                    <ul>
                        <li><input type="radio" name="radio6"> a) Probándolo.
                        </li>
                        <li><input type="radio" name="radio6"> b) Es un diseño moderno y se mira bien.</li>
                        <li><input type="radio" name="radio6"> c) Leer los detalles acerca de sus características.</li>
                        <li><input type="radio" name="radio6"> d) El vendedor me informa acerca de sus características.
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
                        <li><input type="radio" name="radio7"> a) Escribir ambas palabras en un papel y escoja una.
                        </li>
                        <li><input type="radio" name="radio7"> b) Pienso cómo suena cada palabra y escojo una.</li>
                        <li><input type="radio" name="radio7"> c) Busco la palabra en un diccionario.</li>
                        <li><input type="radio" name="radio7"> d) Veo la palabra en mi mente y escojo según como la veo.
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
                        <li><input type="radio" name="radio8"> a) Interesantes descripciones escritas, listas y
                            explicaciones.
                        </li>
                        <li><input type="radio" name="radio8"> b) Diseño interesante y características visuales.</li>
                        <li><input type="radio" name="radio8"> c) Cosas que con un click pueda cambiar o examinar.</li>
                        <li><input type="radio" name="radio8"> d) Canales donde puedo oír música, programas de radio o
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
                        <li><input type="radio" name="radio9"> a) Usa un mapa o página de Internet para mostrarles los
                            lugares.
                        </li>
                        <li><input type="radio" name="radio9"> b) Describe algunos de los puntos sobresalientes.</li>
                        <li><input type="radio" name="radio9"> c) Darles una copia del itinerario impreso.</li>
                        <li><input type="radio" name="radio9"> d) Llamarles por teléfono o mandar mensaje por correo
                            electrónico.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>10. Usted está usando un libreo, disco compacto o página de Internet para aprender a tomar fotos con
                        su cámara digital nueva. Usted le gustaría tener:</h2>
                    <ul>
                        <li><input type="radio" name="radio10"> a) Una oportunidad de hacer preguntas acerca de la
                            cámara y sus características.
                        </li>
                        <li><input type="radio" name="radio10"> b) Esquemas o diagramas que muestra la cámara y la
                            función de cada parte.</li>
                        <li><input type="radio" name="radio10"> c) Ejemplos de buenas y malas fotos y cómo mejorarlas.
                        </li>
                        <li><input type="radio" name="radio10"> d) Aclarar las instrucciones escritas con listas y
                            puntos sobre qué hacer.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>11. Usted quiere aprender un programa nuevo, habilidad o juego en una computadora. Usted qué hace:
                    </h2>
                    <ul>
                        <li><input type="radio" name="radio11"> a) Hablar con gente que sabe acerca del programa.
                        </li>
                        <li><input type="radio" name="radio11"> b) Leer las instrucciónes que vienen en el programa.
                        </li>
                        <li><input type="radio" name="radio11"> c) Seguir los esquemas en el libro que acompaña el
                            programa.
                        </li>
                        <li><input type="radio" name="radio11"> d) Use los controles o el teclado.
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
                        <li><input type="radio" name="radio12"> a) Va con la persona.
                        </li>
                        <li><input type="radio" name="radio12"> b) Anote las direcciones en un papel (sin mapa).
                        </li>
                        <li><input type="radio" name="radio12"> c) Les dice las direcciones.
                        </li>
                        <li><input type="radio" name="radio12"> d) Les dibuja un croquis o les da un mapa.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <h2>13. Recuerde un momento en su vida en que Usted aprendió a hacer algo nuevo. Trate de evitar escoger
                        una destreza física, como andar en bicicleta. Usted aprendió mejor:
                    </h2>
                    <ul>
                        <li><input type="radio" name="radio13"> a) Viendo una demostración.
                        </li>
                        <li><input type="radio" name="radio13"> b) Con instrucciones escritas, en un manual o libro de
                            texto.
                        </li>
                        <li><input type="radio" name="radio13"> c) Escuchando a alguien explicarlo o haciendo preguntas.
                        </li>
                        <li><input type="radio" name="radio13"> d) Con esquemas y diagramas o pistas visuales.
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
                        <li><input type="radio" name="radio14"> a) Demostraciones, modelos, sesiones pácticas.
                        </li>
                        <li><input type="radio" name="radio14"> b) Folletos, libros o lecturas.
                        </li>
                        <li><input type="radio" name="radio14"> c) Diagramas, esquemas o gráficas.
                        </li>
                        <li><input type="radio" name="radio14"> d) Preguntas y respuestas, pláticas y oradores
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
                        <li><input type="radio" name="radio15"> a) Los acompaña a un parque o reserva natural.
                        </li>
                        <li><input type="radio" name="radio15"> b) Les da un libro o folleto acerca de parques o
                            reservas naturales.
                        </li>
                        <li><input type="radio" name="radio15"> c) Les da una plática acerca de parques o reservas
                            naturales.
                        </li>
                        <li><input type="radio" name="radio15"> d) Les muestra imágines de Internet, fotos o libros con
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
                        <li><input type="radio" name="radio16"> a) Escriba el discurso y aprendérselo leyéndo varias
                            veces.
                        </li>
                        <li><input type="radio" name="radio16"> b) Reunir muchos ejemplos e historias para hacer el
                            discurso verdadero y práctico.
                        </li>
                        <li><input type="radio" name="radio16"> c) Escribir algunas palabras claves y practicar el
                            discurso repetida veces.
                        </li>
                        <li><input type="radio" name="radio16"> d) Hacer diagramas o esquemas que te ayuden a explicar
                            las cosas.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
