function panelofertas(argument) {

    var btn = document.getElementById('enviar');

    //  Agregamos un evento clic al botón de enviar  para que los datos de la oferta se inserten en la base de datos 
    btn.addEventListener("click", function(event) {

        // =================================================

        //  Usamos el método Ajax de JQuery para enviar los datos al servidos sin recargar la pagina 
        $.ajax({
                url: "insert.php", // La url a la que se enviaran los datos 
                type: "POST", // Método de envío de datos 
                data: capturavalores(),
                // la data que enviaremos al servidor , en este caso con una función
                // Verificar funcionamiento de la función para comprender los datos que aquí se envían 
                // --------------------
                // Los siguientes parámetros deben estar en falso para poder enviar 
                // ficheros multimedia al servidor 

                // contentType: false,
                // cache: false,
                // processData: false,
                // 
                contentType: false,
                cache: false,
                processData: false,
                //  Este parámetro tiene la función que se ejecutara cuando el envío sea exitoso
                success: function(data) {
                    //  Se recibe la data devuelta por el servidor a esta función anónima 
                    var res = JSON.parse(data);
                    //  condicional si la respuesta es  si hace algo y si es to hace algo 
                    if (res.respuesta == "si") {
                        //  Función  de swet alert
                        swal({
                            title: "Perfecto!!",
                            text: "Registro Insertado",
                            icon: "success",
                        });

                    } else if (res.respuesta == "no") {
                        //  Función  de swet alert
                        swal({
                            title: "Error",
                            text: "Verifique si ingreso los datos correctamente ",
                            icon: "error",
                        });
                    }
                }

            }).done(function(data) {
                //  cuando la data se envió podemos escribir funciones aquí 
            })
            .fail(function(data) {
                //  Si hay algún fallo  podemos escribir funciones aquí 
            });
        // =================================================

    })

}

// ================================================================

function capturavalores(argument) {

    //  Variables para capturar los valores del formulario de inserción de oferta

    let
        nombreOferta =
        document.getElementById('nombreOferta'),

        descripcionOferta =
        document.getElementById('descripcionOferta'),

        precio =
        document.getElementById('precio'),

        fechavigencia =
        document.getElementById('fechavigencia'),

        video =
        document.getElementById('video'),

        imagen =
        document.getElementById('imagen');

    // =============================================================

    //  Falta colocar comentarios sobre  implementar el uso de [FormData();] para enviar datos al servidor 
    let formData = new FormData();
    // Funciona agregando valores a la instancia de FormData() usando método append()
    formData.append('nombreOferta', nombreOferta.value);
    formData.append('descripcionOferta', descripcionOferta.value);
    formData.append('precio', precio.value);
    formData.append('fechavigencia', fechavigencia.value);
    // Para los ficheros de tipo file se usa el método file y 
    // el indice del fiero que contiene.
    formData.append('video', video.files[0]);
    formData.append('imagen', imagen.files[0]);

    nombreOferta.value = "";
    descripcionOferta.value = "";
    precio.value = 0;
    fechavigencia.value = "";

    return formData;

}