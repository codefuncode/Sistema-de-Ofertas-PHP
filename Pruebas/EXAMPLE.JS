$.ajax({
        method: "POST",
        url: "php/compraoferta.php",
        data: {
            nombreCliente: input_usuario[0].value,
            emailCliente: input_usuario[1].value,
            telefonoCliente: input_usuario[2].value,
            idOferta: document.getElementById("ide_de_turno").textContent

        },
    })
    .done(function(msg) {
        console.log(msg);
    });