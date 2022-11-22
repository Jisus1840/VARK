document.getElementById("enviar_formulario").onclick = async () => {
    // URL
    const url = route("formularioVark.store");

    // Form
    const form = document.getElementById("formulario");

    // FormData
    const formData = new FormData(form);

    // Init
    const init = {
        method: "POST",
        body: formData,
        headers: {
            Accept: "application/json",
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
        }
    }

    // req
    const req = await fetch(url, init)

    if (req.ok) {
        let flag = false;
        const res = await req.json()
        if (res.respuesta == 'V') {
            Swal.fire({
                title: 'Exito!',
                text: 'Tu personalidad es VISUAL',
                imageUrl: '../public/img/VISUAL.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            });
            flag = true;
        }
        if (res.respuesta == 'A') {
            Swal.fire({
                title: 'Exito!',
                text: 'Tu personalidad es AUDITIVO',
                imageUrl: '../public/img/AUDITIVO.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
            flag = true;
        }
        if (res.respuesta == 'R') {
            Swal.fire({
                title: 'Exito!',
                text: 'Tu personalidad es LECTOR',
                imageUrl: '../public/img/LECTOR.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
            flag = true;
        }
        if (res.respuesta == 'K') {
            Swal.fire({
                title: 'Exito!',
                text: 'Tu personalidad es KINESTESICO',
                imageUrl: '../public/img/KINESTESICO.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
            flag = true;
        }
        if (flag) {
            window.open(route('generarPdfVARK', res.id));
            // form.reset();
        }
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Advertencia',
            text: 'Favor de llenar todos los campos'
        });
    }
}
