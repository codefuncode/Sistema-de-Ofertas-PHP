function compruebaloguin(argument) {
    let cuerpo = document.getElementById("cuerpo");
    let targetaCompra = document.getElementById("targetaCompra");
    let formulario = document.querySelector(".formulario");
    let registrese = document.querySelector(".registrese");
    let inicioseccion = document.querySelector(".inicioseccion");
    let btn_registro = document.querySelector(".registrese button");

    cuerpo.style.display = "none";
    targetaCompra.style.display = "none";
    formulario.style.display = "none";

    var inputs = document.querySelectorAll('.registrese input');
    console.log(inputs.length);
    for (var i = 0; i < inputs.length; i++) {
        console.log(inputs[i]);
    }

    btn_registro.addEventListener("click", function(argument) {
        let datos = {
            nombreCliente: inputs[0].value,
            emailCliente: inputs[1].value,
            telefonoCliente: inputs[2].value,
            pass: inputs[3].value,
        }
        console.log(datos);
    });
}