//  Variable global para almacenar el id de usuario de turno
var idusuario;

function compruebaloguin(argument) {

    // ===================================================================

    //  Estas son las variables  que se utilizan en este documento 

    let
        cuerpo =
        document.getElementById("cuerpo"),

        targetaCompra =
        document.getElementById("targetaCompra"),

        registrese =
        document.querySelector(".registrese"),

        inicioseccion =
        document.querySelector(".inicioseccion"),

        logeo = false,

        inicio = document.getElementById('inicio');

    var
        inputs =
        document.querySelectorAll('.registrese input'),

        btn_registro = document.querySelectorAll(".registrese button"),

        btn_inicioseccion =
        document.querySelector(".inicioseccion button"),

        input_inicioseccion =
        document.querySelectorAll(".inicioseccion input");

    // ===================================================================

    // / Solo mostramos la caja para registrarse el usuario al comienzo del todo 
    inicioseccion.style.display = "none";
    cuerpo.style.display = "none";
    targetaCompra.style.display = "none";
    registrese.style.display = "";

    //  Poner todas las cajas a cero todos
    // los imput a cero o  por si  se queden valores incrustados 
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = "";

    }
    //  evento para el botón registrarse 
    btn_registro[0].addEventListener("click", function(argument) {

        if (inputs[0].value == "" ||
            inputs[1].value == "" ||
            inputs[2].value == "" ||
            inputs[3].value == "") {

            //  Aquí puede ir un código que realice algún cuantas tareas para dejarle saber al usuario donde esta el error que provoco entrar en este condicional.

        } else {
            //  Si los  input están todos con los datos  entonces entrara aquí
            //  recopilara los datos  y los enviara al servidos 
            let
                datos = {
                    nombreCliente: inputs[0].value,
                    emailCliente: inputs[1].value,
                    pass: inputs[2].value,
                    telefonoCliente: inputs[3].value,
                }

            // Implementan del método  Ajax de JQuery
            $.ajax({
                    method: "POST", // Método que se usara para enviar los datos 
                    url: "php/reguistro.php", // URL del fichero PHP donde se enviaran los datos 
                    data: datos // Datos que se enviaran 
                })
                .always(function(data) {

                    var data = JSON.parse(data); // Recuperamos los datos y los convertimos en objeto

                    // console.log(msg);

                    console.log(data.respuesta);

                    if (data.respuesta == "existe") { // si la respuesta es existe  ara lo de aquí

                        inicioseccion.style.display = "";
                        cuerpo.style.display = "none";
                        targetaCompra.style.display = "none";
                        registrese.style.display = "none";

                    } else if (data.respuesta == "ok") { // si es OK es que se registro 

                        logeo = true;
                        cuerpo.style.display = "";
                        inicioseccion.style.display = "none";
                        targetaCompra.style.display = "none";
                        registrese.style.display = "none";

                    } else if (data.respuesta == "no") { // Algo estuvo mal si el  servidor envía  esto

                    }

                });

        }

    });

    btn_registro[1].addEventListener("click", function(argument) {

        // Solo funciona para cambiar del formulario de registro al de inicio 

        inicioseccion.style.display = "";
        cuerpo.style.display = "none";
        targetaCompra.style.display = "none";
        registrese.style.display = "none";

    });

    inicio.addEventListener("click", function(argument) {

        // Entrara aquí si esta autentificado mostrara el cuerpo para regresar al inicio 

        if (logeo) {

            cuerpo.style.display = "";
            targetaCompra.style.display = "none";
            registrese.style.display = "none";

        }

    });

    btn_inicioseccion.addEventListener("click", function(argument) {
        // Evento para verificar si el usuario existe en la base de datos 
        let datos = {

            emailCliente: input_inicioseccion[0].value,
            pass: input_inicioseccion[1].value,

        }
        $.ajax({
                method: "POST",
                url: "php/inicioseccion.php",
                data: datos
            })
            .always(function(msg) {
                // Recibimos data jonson y convertimos en objeto 
                let myObj = JSON.parse(msg);

                console.log(myObj[0].respuesta);

                if (myObj[0].respuesta == "si") {

                    logeo = true;
                    cuerpo.style.display = "";
                    inicioseccion.style.display = "none";
                    targetaCompra.style.display = "none";
                    registrese.style.display = "none";

                    //  Recuperamos el id de usuario y la colocamos en la 
                    // variable global para usarse en otro lugar del programa
                    idusuario = myObj[0].idcliente;
                    // -----------------------------

                } else if (myObj[0].respuesta == "no") {
                    //  POdemos incluir mensaje de error
                }

            });
    });
}