
function formulario1() {
    let ext1 = document.getElementById('ext1').value;
    let int1 = document.getElementById('int1');
    let ext2 = document.getElementById('ext2').value;
    let int2 = document.getElementById('int2');
    let ext3 = document.getElementById('ext3').value;
    let int3 = document.getElementById('int3');
    let ext4 = document.getElementById('ext4').value;
    let int4 = document.getElementById('int4');
    let ext5 = document.getElementById('ext5').value;
    let int5 = document.getElementById('int5');
    let ext6 = document.getElementById('ext6').value;
    let int6 = document.getElementById('int6');
    let ext7 = document.getElementById('ext7').value;
    let int7 = document.getElementById('int7');
    let ext8 = document.getElementById('ext8').value;
    let int8 = document.getElementById('int8');
    let ext9 = document.getElementById('ext9').value;
    let int9 = document.getElementById('int9');
    let ext10 = document.getElementById('ext10');
    let int10 = document.getElementById('int10');

    let totalExtrovertido = parseInt(ext1) + parseInt(ext2) + parseInt(ext3) + parseInt(ext4) + parseInt(ext5) + parseInt(ext6) + parseInt(ext7) + parseInt(ext8) + parseInt(ext9)
    ext10.value = totalExtrovertido;

    int1.value = 10 - ext1
    int2.value = 10 - ext2
    int3.value = 10 - ext3
    int4.value = 10 - ext4
    int5.value = 10 - ext5
    int6.value = 10 - ext6
    int7.value = 10 - ext7
    int8.value = 10 - ext8
    int9.value = 10 - ext9

    int10.value = 90 - totalExtrovertido;

    if (totalExtrovertido >= 45) {
        return 'E'
    }

    return 'I';
}

function formulario2() {
    let sen1 = document.getElementById('sen1').value;
    let intu1 = document.getElementById('intu1');
    let sen2 = document.getElementById('sen2').value;
    let intu2 = document.getElementById('intu2');
    let sen3 = document.getElementById('sen3').value;
    let intu3 = document.getElementById('intu3');
    let sen4 = document.getElementById('sen4').value;
    let intu4 = document.getElementById('intu4');
    let sen5 = document.getElementById('sen5').value;
    let intu5 = document.getElementById('intu5');
    let sen6 = document.getElementById('sen6').value;
    let intu6 = document.getElementById('intu6');
    let sen7 = document.getElementById('sen7').value;
    let intu7 = document.getElementById('intu7');
    let sen8 = document.getElementById('sen8').value;
    let intu8 = document.getElementById('intu8');
    let sen9 = document.getElementById('sen9').value;
    let intu9 = document.getElementById('intu9');
    let sen10 = document.getElementById('sen10');
    let intu10 = document.getElementById('intu10');

    let totalSensorial = parseInt(sen1) + parseInt(sen2) + parseInt(sen3) + parseInt(sen4) + parseInt(sen5) + parseInt(sen6) + parseInt(sen7) + parseInt(sen8) + parseInt(sen9)
    sen10.value = totalSensorial;

    intu1.value = 10 - sen1
    intu2.value = 10 - sen2
    intu3.value = 10 - sen3
    intu4.value = 10 - sen4
    intu5.value = 10 - sen5
    intu6.value = 10 - sen6
    intu7.value = 10 - sen7
    intu8.value = 10 - sen8
    intu9.value = 10 - sen9

    intu10.value = 90 - totalSensorial;

    if (totalSensorial >= 45) {
        return 'S'
    }

    return 'N';
}

function formulario3() {
    let rac1 = document.getElementById('rac1').value;
    let emo1 = document.getElementById('emo1');
    let rac2 = document.getElementById('rac2').value;
    let emo2 = document.getElementById('emo2');
    let rac3 = document.getElementById('rac3').value;
    let emo3 = document.getElementById('emo3');
    let rac4 = document.getElementById('rac4').value;
    let emo4 = document.getElementById('emo4');
    let rac5 = document.getElementById('rac5').value;
    let emo5 = document.getElementById('emo5');
    let rac6 = document.getElementById('rac6').value;
    let emo6 = document.getElementById('emo6');
    let rac7 = document.getElementById('rac7').value;
    let emo7 = document.getElementById('emo7');
    let rac8 = document.getElementById('rac8').value;
    let emo8 = document.getElementById('emo8');
    let rac9 = document.getElementById('rac9').value;
    let emo9 = document.getElementById('emo9');
    let rac10 = document.getElementById('rac10');
    let emo10 = document.getElementById('emo10');

    let totalRacional = parseInt(rac1) + parseInt(rac2) + parseInt(rac3) + parseInt(rac4) + parseInt(rac5) + parseInt(rac6) + parseInt(rac7) + parseInt(rac8) + parseInt(rac9)
    rac10.value = totalRacional;

    emo1.value = 10 - rac1
    emo2.value = 10 - rac2
    emo3.value = 10 - rac3
    emo4.value = 10 - rac4
    emo5.value = 10 - rac5
    emo6.value = 10 - rac6
    emo7.value = 10 - rac7
    emo8.value = 10 - rac8
    emo9.value = 10 - rac9

    emo10.value = 90 - totalRacional;

    if (totalRacional >= 45) {
        return 'T'
    }

    return 'F';
}

function formulario4() {
    let cal1 = document.getElementById('cal1').value;
    let per1 = document.getElementById('per1');
    let cal2 = document.getElementById('cal2').value;
    let per2 = document.getElementById('per2');
    let cal3 = document.getElementById('cal3').value;
    let per3 = document.getElementById('per3');
    let cal4 = document.getElementById('cal4').value;
    let per4 = document.getElementById('per4');
    let cal5 = document.getElementById('cal5').value;
    let per5 = document.getElementById('per5');
    let cal6 = document.getElementById('cal6').value;
    let per6 = document.getElementById('per6');
    let cal7 = document.getElementById('cal7').value;
    let per7 = document.getElementById('per7');
    let cal8 = document.getElementById('cal8').value;
    let per8 = document.getElementById('per8');
    let cal9 = document.getElementById('cal9').value;
    let per9 = document.getElementById('per9');
    let cal10 = document.getElementById('cal10');
    let per10 = document.getElementById('per10');

    let totalCalificador = parseInt(cal1) + parseInt(cal2) + parseInt(cal3) + parseInt(cal4) + parseInt(cal5) + parseInt(cal6) + parseInt(cal7) + parseInt(cal8) + parseInt(cal9)
    cal10.value = totalCalificador;

    per1.value = 10 - cal1
    per2.value = 10 - cal2
    per3.value = 10 - cal3
    per4.value = 10 - cal4
    per5.value = 10 - cal5
    per6.value = 10 - cal6
    per7.value = 10 - cal7
    per8.value = 10 - cal8
    per9.value = 10 - cal9

    per10.value = 90 - totalCalificador;

    if (totalCalificador >= 45) {
        return 'J'
    }

    return 'P';
}



async function resultado() {
    f1 = formulario1();
    f2 = formulario2();
    f3 = formulario3();
    f4 = formulario4();

    // URL
    const url = route("formularioPersonalidad.store");


    // FormData
    const formData = new FormData();

    formData.append('resultado', f1 + f2 + f3 + f4);

    // Init
    const init = {
        method: "POST",
        body: formData,
        headers: {
            Accept: "application/json",
            'X-CSRF-TOKEN': document.querySelector('[name="_token"]').value,
        }
    }

    // req
    const req = await fetch(url, init)

    if (req.ok) {
        const res = await req.json()
        console.log(res);
        // Construccion del modal
        let modal = new bootstrap.Modal(document.getElementById("exampleModal"));
        modal.toggle();
        document.getElementById(
            "exampleModalLabel"
        ).innerHTML = `Información de la persona`;
        document.getElementById("modalSize").classList.add("modal-lg");
        document.getElementById("exampleModalLabel").style = "color: white";

        if (res.resultado == 'ISFJ') {
            document.getElementById("modal-body").innerHTML = `
                 <div class="row">
                    <div class="mb-3 col-md-12">
                    <h1>${res.resultado}</h1>
                    <h3>Peligros potenciales:</h3>
                        <ul>
                            <li>Pueden ser algo pesimistas acerca del futuro.</li>
                            <li>Pueden ser considerados insuficientemente sólidos cuando someten sus puntos de vista a otros.</li>
                            <li>Pueden ser subvalorados por su estilo tranquilo y algo retraido.</li>
                            <li>Pueden no ser tan flexibles como la situación u otros requieran.</li>
                        </ul>
                    <h3>Sugerencias para el desarrollo:</h3>
                        <ul>
                            <li>Deben aprender a divulgar y llamar más la atención hacia sus propios logros.</li>
                            <li>Deben tratar de evitar cierta suspicacia hacia su propia intuición o imaginación y tomarlas más en serio.</li>
                        </ul>
                    </div>
                </div>
                 `;
        }
        if (res.resultado == 'ISFP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                                <li>Pueden ser demasiado confiados y credulos. </li>
                                <li>Pueden no criticar a otros cuando es necesario.</li>
                                <li>Pueden ser heridos con facilidad y hasta retirarse.</li>
                                <li>Pueden sentir un contraste tal entre sus elevados ideales internos y sus realizaciones reales, que asuman un cierto sentido de inadecuación.
                                aún cuando estén siendo efectivos como los demás</li>
                            </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                                <li>Deben desarrollar mas escepticismo y un metodo para analizar la informaci6n en lugar de simplemente aceptarla como buena</li>
                                <li>Deben elevar el aprecio a sus propios logros.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ISTJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                                <li>Pueden tener problemas si esperan que todo el mundo sea tan lógico y analitico como ellos. </li>
                                <li>Pueden ignorar las implicaciones de largo alcance por priorizar operaciones de carácter cotidiano.</li>
                                <li>Pueden discutir las relaciones interpersonales.</li>
                                <li>Pueden tornarse rígidos en su comportamiento y ser considerados inflexibles.</li>
                            </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                                <li>Deben prestar atención tambien a las mas amplias ramificaciones de problemas, ademas de a las realidades presentes</li>
                                <li>Deben probar alternativas frescas para evitar lo tradicionales utilizado.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ISTP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden guardarse cosas importantes para si y parecer no estar preocupados.</li>
                            <li>Pueden seguir adelante con el trabajo, antes de esperar que el esfuerzo previo rinda los frutos necesarios.</li>
                            <li>Pueden parecer indecisos y no dirigidos.</li>
                            </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Pueden necesitar abrirse y compartir preocupaciones e informaci6n con otras personas.</li>
                            <li>Pueden necesitar desarrollar perseverancia.</li>
                            <li>Pueden necesitar planificar y dedicar el esfuerzo necesario para lograr los resultados deseados.</li>
                            <li>Pueden necesitar desarrollar el habito de fijarse metas.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'INFJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden creer, aunque no sea realidad, que sus ideas son pasadas por alto y/o subestimadas.</li>
                            <li>Pueden no ser francos y directos con la critica.</li>
                            <li>Pueden ser reacios a inmiscuirse en la vida de otros y, por lo tanto, mantenerse demasiado para si.</li>
                            <li>Pueden operar con concentración en un solo asunto, ignorando otras tareas que necesitan ser realizadas.</li>
                            </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Pueden necesitar desarrollar habilidades politicas e impositivas para luchar por sus ideales.</li>
                            <li>Pueden necesilar aprender a dar retroalimentaci6n constructiva a otros oportunamente.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'INFP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden demorar la terminaci6n de !areas debido al perfeccionismo.</li>
                            <li>Pueden tratar de agradar a demasiada gente al mismo tiempo.</li>
                            <li>Pueden dedicar mas tiempo a la reflexion que a la acción</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben desarrollar mas dureza y disposición a decir que no.</li>
                            <li>Deben desarrollar la capacidad para trabajar con la realidad mas que buscar la respuesta perfecta</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'INTJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden parecer tan inflexibles que otros teman acercarseles o discrepar.</li>
                            <li>Pueden tener dificultades en deshacerse de ideas impracticables.</li>
                            <li>Pueden ignorar el impacto de sus ideas o estilo sabre otros.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                                <li>Deben esforzarse por oir las ideas de otros.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'INTP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden parecer tan inflexibles que otros teman acerseles o discrepar.</li>
                            <li>Pueden temer dificultades en deshacerse de ideas impractibles.</li>
                            <li>Pueden ignorar el impacto de sus ideas o estilo sobre otros.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben concentrarse en detalles practices y desarrollar el seguimiento, asi como hacer esfuerzos para expresar las cosas de manera mas simple.</li>
                            <li>Deben esforzarse por co·nocer los aspectos personales y profesionales de los restantes integrantes del grupo.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ESFJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden ocultar algun problema par evitar un conflicto.</li>
                            <li>Pueden no valorar suficientemente sus propias prioridades debido a su deseo de agradar a los demas.</li>
                            <li>Pueden no siempre detenerse y ver el cuadro complete.</li>
                            <li>Pueden asurnir, sin suficientes elementos, lo que es mejor para otros o para la organización</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben incluir sus propias necesidades.</li>
                            <li>Deben escuchar bien lo que los otros realmente necesitan o quieren.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ESFP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden sobre-enfatizar informaci6n no objetiva.</li>
                            <li>Pueden no reflexionar antes de "lanzarse".</li>
                            <li>Pueden invertir demasiado tiempo a ser sociables y descuidar alguna tarea.</li>
                            <li>Puede que no tenninen siempre lo que empiezan.
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Pueden necesitar incluir implicaciones 16gicas en su toma de decisiones.</li>
                            <li>Pueden necesitar planificar previamente cuando administran proyecto .</li>
                            <li>Pueden necesitar balancear el esfuerzo por las tareas con el trato social.</li>
                            <li>Pueden necesitar trabajar en una mejor administraci6n del tiempo.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ESTJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden ser sorprendidos por sus sentimientos y valores si los ignora durante mucho t1empo.</li>
                            <li>Pueden decidir demasiado rapidamente.</li>
        |                   <li>Pueden no ver la necesidad de cambio.</li>
                            <li>Pueden pasar par alto las sutilezas al tratar de que se haga el trabaja.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben considerar todos las aspectos, incluyendo el elemento humano, antes de decidir.</li>
                            <li>Deben esforzarse para ver las beneficios del cambio.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ESTP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden parecer bruscos, e inclusa insensibles, cuando actuan rapidamente.</li>
                            <li>Pueden descansar demasiado en la improvisaci6n y perder de vista las implicacianes mas amplias de sus acciones.</li>
                            <li>Pueden sacrificar el seguimiento de cualquier situaci6n ante el siguiente problema inmediato.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben dominar su excesiva confianza e incluir los sentimientos de atras personas en sus analisis.</li>
                            <li>Deben tratar de ver mas alla de lo inmediato y planificar con antelación.</li>
                            <li>Deben desarrallar mas su perseverancia.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ENFJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden idealizar a otros y sufrir de "lealtad ciega".</li>
                            <li>Pueden barrer losproblemas debajo de la alfombra" cuando estan en conflicto.</li>
                            <li>Puede no priorizar las tareas a favor de cuestiones de relaciones humanas.</li>
                            <li>Puede interpretar la critica de forma personal.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben hacer un esfuerzo especial para admitir las limitaciones de la gente que quiere.</li>
                            <li>Pueden necesitar aprender a manejar los conflictos en forma productiva.</li>
                            <li>Pueden requerir prestar igual atenci6n a las detalles de la tarea tanto coma a los de la gente.</li>
                            <li>Pueden necesitar detener el analisis autocritico subjetivo y escuchar cuidadosamente la informaci6n objetiva contenido en la retroalimentación</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ENFP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden pasar a nuevas ideas y proyectos sin completar los ya iniciados.</li>
                            <li>Pueden pasar por alto detalles importantes.</li>
                            <li>Pueden tratar de abarcar demasiado. Pueden dernorarse.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben fijar prioridades y dar seguimiento completo a los asuntos.</li>
                            <li>Deben buscar detalles importantes.</li>
                            <li>Deben seleccionar proyectos en lugar de tratar de hacer todo lo que sea inicialmente atractivo</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ENTJ') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden ignorar las necesidades de la gente al enfocar la !area.</li>
                            <li>Pueden ignorar las consideraciones y limitantes practicas.</li>
                            <li>Pueden decidir demasiado rapidamente y aparecer impacientes y prepotentes.</li>
                            <li>Pueden ignorar y reprimir sus propios sentimientos.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben esforzarse por incluir el elemento humano y apreciar las cantribuciones de otros.</li>
                            <li>Deben chequear los recurses praclicos, personales y situacionales disponibles, antes de seguir adelante.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        if (res.resultado == 'ENTP') {
            document.getElementById("modal-body").innerHTML = `
                     <div class="row">
                        <div class="mb-3 col-md-12">
                        <h1>${res.resultado}</h1>
                        <h3>Peligros potenciales:</h3>
                            <ul>
                            <li>Pueden "perderse" en el modelo, olvidando las realidades presentes. Pueden ser competitivos y no apreciar la contribución de otros.</li>
                            <li>Pueden sobre-extenderse.</li>
                            <li>Pueden no adaptarse bien a los procedimientos establecidos.</li>
                        </ul>
                        <h3>Sugerencias para el desarrollo:</h3>
                            <ul>
                            <li>Deben prestar atención a la realidad presente.</li>
                            <li>Deben esforzarse par reconocer y validar la contribución de otros.</li>
                            </ul>
                        </div>
                    </div>
                     `;
        }
        modal.handleUpdate();


    } else {
        Swal.fire({
            icon: 'error',
            title: 'Advertencia',
            text: 'Favor de llenar todos los campos'
        });
    }

    // return f1 + f2 + f3 + f4;
}
