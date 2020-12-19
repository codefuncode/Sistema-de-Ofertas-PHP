var idusuario;

function compruebaloguin(argument) {

    // ===================================================================

    //  Estas son las variables  que se utilizan en este documento 

    //  Elementos seleccionados 

    //           Cuerpo 

    //           Elemento que representa la tarjeta de compra 

    let cuerpo = document.getElementById("cuerpo");
    let targetaCompra = document.getElementById("targetaCompra");
    // let formulario = document.querySelector(".formulario");
    let registrese = document.querySelector(".registrese");
    let inicioseccion = document.querySelector(".inicioseccion");
    let btn_registro = document.querySelectorAll(".registrese button");
    let logeo = false;
    var inputs = document.querySelectorAll('.registrese input');
    let inicio = document.getElementById('inicio');
    var btn_inicioseccion = document.querySelector(".inicioseccion button");
    var input_inicioseccion = document.querySelectorAll(".inicioseccion input");
    console.log(input_inicioseccion);

    // ===================================================================
    inicioseccion.style.display = "none";
    cuerpo.style.display = "none";
    targetaCompra.style.display = "none";
    registrese.style.display = "";

    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = "";

    }

    btn_registro[0].addEventListener("click", function(argument) {

        if (inputs[0].value == "" ||
            inputs[1].value == "" ||
            inputs[2].value == "" ||
            inputs[3].value == "") {

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
                    let myObj = JSON.parse(msg);
                    console.log(msg);
                    console.log(myObj.respuesta);

                    if (myObj.respuesta == "existe") {

                        inicioseccion.style.display = "";
                        cuerpo.style.display = "none";
                        targetaCompra.style.display = "none";
                        registrese.style.display = "none";

                    } else if (myObj.respuesta == "ok") {

                        logeo = true;
                        cuerpo.style.display = "";
                        inicioseccion.style.display = "none";
                        targetaCompra.style.display = "none";
                        registrese.style.display = "none";

                    } else if (myObj.respuesta == "no") {

                    }

                });

        }

    });

    btn_registro[1].addEventListener("click",
        function(argument) {

            inicioseccion.style.display = "";
            cuerpo.style.display = "none";
            targetaCompra.style.display = "none";
            registrese.style.display = "none";

        });

    inicio.addEventListener("click", function(argument) {

        if (logeo) {

            cuerpo.style.display = "";
            targetaCompra.style.display = "none";
            registrese.style.display = "none";

        }

    });

    btn_inicioseccion.addEventListener("click", function(argument) {

        let datos = {

            emailCliente: input_inicioseccion[0].value,
            pass: input_inicioseccion[1].value,

        }
        $.ajax({
                method: "POST",
                url: "php/inicioseccion.php",
                data: datos
            })
            .done(function(msg) {

                let myObj = JSON.parse(msg);

                console.log(myObj[0].respuesta);
                if (myObj[0].respuesta == "si") {

                    logeo = true;
                    cuerpo.style.display = "";
                    inicioseccion.style.display = "none";
                    targetaCompra.style.display = "none";
                    registrese.style.display = "none";

                    idusuario = myObj[0].idcliente;

                } else if (myObj[0].respuesta == "no") {

                }

            });
    });
}