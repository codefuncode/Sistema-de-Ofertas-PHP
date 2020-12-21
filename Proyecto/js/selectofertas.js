//  ESta función se ejecuta de inmediato que la pagina esta completamente cargada 
function iniciodata() {
    //  variables  para recuperar los datos detectar la posición  en la oferta que esta navegando el usuario 
    var
        dataresivida,
        posicion = 0,
        id_oferta = "",
        targetaCompra =
        document.getElementById('targetaCompra');

    targetaCompra.style.display = "none";
    //  Enviamos una petición al servidor que nos traiga todas las ofertas en la base de datos 
    $.ajax({
        method: 'POST',
        url: 'php/selecionaofertas.php',
        data: {
            json: JSON.stringify({
                "x": "x"
            })
        },
        dataType: 'json'

    }).done(function(data) { // El parámetro de esta función contiene los datos del servidor 
        if (!data == "undefined") {
            //  Variables para los elementos que reaccionaran de acuerdo a la respuesta del servidor 
            var
                nombreOfertaDisplay =
                document.getElementById('nombreOfertaDisplay'),

                descripcionOferta =
                document.getElementById('descripcionOferta'),

                videoserver =
                document.getElementById('videoserver'),

                precio =
                document.getElementById('precio');

            //  EScribir datos del servidor en el  HTML
            nombreOfertaDisplay.innerHTML =
                data[posicion]['nombreOferta'];

            precio.innerHTML =
                "$ " + data[posicion]['precio'];

            descripcionOferta.innerHTML =
                data[posicion]['descripcionOferta'];

            videoserver.src =
                "php/" + data[posicion]['video'];

            id_oferta =
                data[posicion]['idoferta'];
        }
    }).always(function(data) {
        // El parámetro de esta función recibe  los  recibidos del servidor 
        // cuando acabe todo el proceso de transferencia
        // ----------------------------
        //  Datos en una variable global  par usarla en cualquier lugar del programa 

        // ----------------------------

        dataresivida = data;
        // Este condicional determina de que si llegan datos del servidor los procese  
        // y genere unas esferas  que determinan el numero de datos resididos  desde el servidor 

        // ------------------------------------------

        //  Variables que seleccionan los botones y elementos necesarios 
        //  para que su actividad  pueda navegar  por las ofertas  
        var
            prev = document.getElementById('prev'),
            next = document.getElementById('next'),
            indiceimg = document.getElementById('indiceimg'),
            imajenofertaactual = document.getElementById('imajenofertaactual'),
            list = [],
            captionText = document.getElementById('CaptionText');

        //  Creamos los elementos
        for (var i = 0; i < data.length; i++) {

            list[i] = document.createElement("spam");
            list[i].classList.add("dot");
        }
        // Agregamos todos los nodos generados 
        for (var i = 0; i < list.length; i++) {

            console.log(list[i]);
            indiceimg.appendChild(list[i]);
        }
        //  Escribimos en el HTML los resultados 
        imajenofertaactual.src = "php/" + data[posicion]['imagen'];
        captionText.innerHTML = data[posicion]['nombreOferta'];
        videoserver.src =
            "php/" + data[posicion]['video'];
        //  Eventos a los botones  responsables de la navegación por las ofertas 
        prev.addEventListener("click", cambiaOferta);
        next.addEventListener("click", cambiaOferta);
        comporarOfertaAhora();

        //  ESta función es la responsable de cambiar el estado de la oferta en el html
        function cambiaOferta(argument) {

            //  MOdifiamos el valor de la posición de la oferta y lo guardamos en una variable 
            if (this == next) {

                posicion += 1;

                if (posicion > data.length - 1) {
                    posicion = 0;
                }

            } else if (this == prev) {
                posicion -= 1;

                if (posicion < 0) {
                    posicion = data.length - 1;
                }

            }
            //  Usamos el valor de la variable posición para desplegar los datos correspondientes en el HTML
            captionText.innerHTML = data[posicion]['nombreOferta'];
            descripcionOferta.innerHTML = data[posicion]['descripcionOferta'];
            precio.innerHTML = "$ " + data[posicion]['precio'];

            imajenofertaactual.src = "php/" + data[posicion]['imagen'];
            videoserver.src = "php/" + data[posicion]['video'];

            id_oferta = data[posicion]['idoferta'];

        }

    }).fail(function(data) {
        // 
    });

    function comporarOfertaAhora(argument) {

        //  Función para enviar los datos necesarios para registrar una compra de ofertas 
        //  Variables  seleccionan los elementos involucrados en la acción 
        let cuerpo =
            document.getElementById('cuerpo'),
            comprarAhora =
            document.getElementById('comprarAhora'),
            targetaImagen =
            document.getElementById('TargetaImagen'),
            targetaTitulo =
            document.getElementById('TargetaTitulo'),
            targetaPrecio =
            document.getElementById('TargetaPrecio'),
            targetaDescripcion =
            document.getElementById('TargetaDescripcion');

        var comprar = document.getElementById('comprar');

        // ===========================================================
        //  Evento escribe en la tarjeta de compra los datos de la oferta 
        comprarAhora.addEventListener(
            "click",
            function() {

                cuerpo.style.display = "none";

                targetaCompra.style.display = "";

                targetaImagen.src =
                    "php/" + dataresivida[posicion]['imagen'];

                targetaTitulo.innerHTML =
                    dataresivida[posicion]['nombreOferta'];

                targetaPrecio.innerHTML =
                    "$ " + dataresivida[posicion]['precio'];

                targetaDescripcion.innerHTML =
                    dataresivida[posicion]['descripcionOferta'];

            });
        //  Se encarga de insertar los datos de compra 
        comprar.addEventListener(
            "click",
            function() {

                let datos = {
                    idUsuario: idusuario,
                    idOferta: dataresivida[posicion]['idoferta']
                }

                $.ajax({
                    method: 'POST',
                    url: 'php/compraoferta.php',
                    data: datos,
                    dataType: 'json'
                }).done(function(data) {
                    // 
                }).always(function(data) {
                    // 
                }).fail(function(data) {
                    // 
                });

            }

        );
        // ===========================================================
    }

};