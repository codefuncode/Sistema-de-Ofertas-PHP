function compruebaloguin(argument) {
    let cuerpo = document.getElementById("cuerpo");
    let targetaCompra = document.getElementById("targetaCompra");
    let formulario = document.querySelector(".formulario");
    let registrese = document.querySelector(".registrese");
    let inicioseccion = document.querySelector(".inicioseccion");
    let btn_registro = document.querySelectorAll(".registrese button");
    let logeo = false;

    let inicio = document.getElementById('inicio');
    inicioseccion.style.display = "none";
    cuerpo.style.display = "none";
    targetaCompra.style.display = "none";
    formulario.style.display = "none";
    registrese.style.display = "";

    var inputs = document.querySelectorAll('.registrese input');
    console.log(inputs.length);
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = "";
        console.log(inputs[i]);
    }

    btn_registro[0].addEventListener("click", function(argument) {

        if (inputs[0].value == "" || inputs[1].value == "" || inputs[2].value == "" || inputs[3].value == "") {

            console.log('Algo esta vacio');

        } else {
            let datos = {
                nombreCliente: inputs[0].value,
                emailCliente: inputs[1].value,
                pass: inputs[2].value,
                telefonoCliente: inputs[3].value,
            }
            $.ajax({
                    method: "POST",
                    url: "php/reguistro.php",
                    data: datos
                })
                .done(function(msg) {
                    var myObj = JSON.parse(msg);
                    // var myObj = JSON.stringify(msg);

                    if (myObj[0].respuesta == "existe") {
                        inicioseccion.style.display = "";
                        cuerpo.style.display = "none";
                        targetaCompra.style.display = "none";
                        formulario.style.display = "none";
                        registrese.style.display = "none";
                        // logeo = true;
                        console.log(myObj);
                        // console.log(myObj.nombreCliente);

                    } else if (myObj[0].respuesta == "ok") {

                        logeo = true;
                        cuerpo.style.display = "";
                        targetaCompra.style.display = "none";
                        formulario.style.display = "none";
                        registrese.style.display = "none";
                        // logeo = true;
                        console.log(myObj);
                    }

                    // console.log(myObj);

                    // console.log('=================');
                    // console.log('Mensajes sin filtro para pruebas')
                    // console.log(msg);
                    // console.log('=================');
                });

        }

    });

    btn_registro[1].addEventListener("click", function(argument) {
        inicioseccion.style.display = "";
        cuerpo.style.display = "none";
        targetaCompra.style.display = "none";
        formulario.style.display = "none";
        registrese.style.display = "none";
        let btn_inicio = document.querySelectorAll('.inicioseccion input');
        console.log(btn_inicio);
    });
    inicio.addEventListener("click", function(argument) {

        if (logeo) {
            console.log(this);
            cuerpo.style.display = "";
            targetaCompra.style.display = "none";
            formulario.style.display = "none";
            registrese.style.display = "none";

        }

    });
}