document.getElementById("enviar_formulario").onclick = async () => {
    // URL
    const url = route("formularioVark.store");

    // Form
    const form = document.getElementById("formulario");

    // ob = {
    //     1: document.getElementById("")
    // }


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
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Formulario completado exitosamente'
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Advertencia',
            text: 'Favor de llenar todos los campos'
        });
    }
}
