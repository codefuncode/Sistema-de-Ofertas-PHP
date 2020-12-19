function CambioUrlImagenes(argument) {

    //  Cambia los atributos src de las imágenes de todas las imágenes 
    //  dentro de la web para evitar errores  con las fotos de la plantilla en linea 

    var img = document.getElementsByTagName('img');
    for (var i = 0; i < img.length; i++) {
        img[i].src = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.maqGevvNdExSKNlCwmkZuAHaEK%26pid%3DApi&f=1";
    }
    console.log(img.length);
}

function panelofertas(argument) {

    var btn = document.getElementById('enviar');

    btn.onclick = function(event) {

        // event.stopPropagation();

        // =================================================
        $.ajax({
                url: "insert.php",
                type: "POST",
                data: capturavalores(),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    var res = JSON.parse(data);

                    if (res.respuesta == "si") {

                        swal({
                            title: "Perfecto!!",
                            text: "Registro Insertado",
                            icon: "success",
                        });

                    } else if (res.respuesta == "no") {

                        swal({
                            title: "Error",
                            text: "Verifique si ingreso los datos correctamente ",
                            icon: "error",
                        });
                    }
                }

            }).done(function(data) {

            })
            .fail(function(data) {

            });
        // =================================================

    };

}

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

    //  Falta colocar comentarios sobre  implementar de  el uso de [FormData();] para enviar datos al servidor 
    let formData = new FormData();

    formData.append('nombreOferta', nombreOferta.value);
    formData.append('descripcionOferta', descripcionOferta.value);
    formData.append('precio', precio.value);
    formData.append('fechavigencia', fechavigencia.value);
    formData.append('video', video.files[0]);
    formData.append('imagen', imagen.files[0]);

    let datadevuelta = formData;

    nombreOferta.value = "";
    descripcionOferta.value = "";
    precio.value = 0;
    fechavigencia.value = "";

    return datadevuelta;

}