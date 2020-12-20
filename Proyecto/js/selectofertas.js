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

        })
        .done(function(data) {
            // data = JSON.stringify(data);
            console.log(data);

            var
                nombreOfertaDisplay =
                document.getElementById('nombreOfertaDisplay'),

                descripcionOferta =
                document.getElementById('descripcionOferta'),

                videoserver =
                document.getElementById('videoserver'),

                precio =
                document.getElementById('precio');

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

        })
        .always(function(data) {

            dataresivida = data;

            if (data) {

                var
                    prev = document.getElementById('prev'),
                    next = document.getElementById('next'),
                    indiceimg = document.getElementById('indiceimg'),
                    imajenofertaactual = document.getElementById('imajenofertaactual'),
                    list = [],

                    captionText = document.getElementById('CaptionText');

                for (var i = 0; i < data.length; i++) {

                    list[i] = document.createElement("spam");
                    list[i].classList.add("dot");
                }
                for (var i = 0; i < list.length; i++) {

                    indiceimg.appendChild(list[i]);
                }

                for (var i = 0; i < list.length; i++) {

                    console.log(list[i]);
                }

                imajenofertaactual.src = "php/" + data[posicion]['imagen'];
                captionText.innerHTML = data[posicion]['nombreOferta'];
                prev.addEventListener("click", cambiaOferta);
                next.addEventListener("click", cambiaOferta);
                comporarOfertaAhora();
            }

            function cambiaOferta(argument) {

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

                // console.log(posicion);

                captionText.innerHTML = data[posicion]['nombreOferta'];
                descripcionOferta.innerHTML = data[posicion]['descripcionOferta'];
                precio.innerHTML = "$ " + data[posicion]['precio'];

                imajenofertaactual.src = "php/" + data[posicion]['imagen'];
                videoserver.src = "php/" + data[posicion]['video'];

                id_oferta = data[posicion]['idoferta'];

                console.log(data[posicion]['idoferta']);
            }

        })
        .fail(function(data) {

            console.log('fail');
            // console.log(data);
        });

    function comporarOfertaAhora(argument) {

        cuerpo = document.getElementById('cuerpo');
        comprarAhora = document.getElementById('comprarAhora');

        // ===========================================================
        comprarAhora.addEventListener("click", function(argument) {
            cuerpo.style.display = "none";
            targetaCompra.style.display = "";
            TargetaImagen.src = "php/" + dataresivida[posicion]['imagen'];
            console.log(TargetaImagen);
            TargetaTitulo.innerHTML = dataresivida[posicion]['nombreOferta'];
            TargetaPrecio.innerHTML = "$ " + dataresivida[posicion]['precio'];
            TargetaDescripcion.innerHTML = dataresivida[posicion]['descripcionOferta'];

        });

        var comprar = document.getElementById('comprar');

        comprar.addEventListener("click", function() {

            let datos = {
                idUsuario: idusuario,
                idOferta: dataresivida[posicion]['idoferta']
            }

            $.ajax({
                    method: 'POST',
                    url: 'php/compraoferta.php',
                    data: datos,
                    dataType: 'json'
                })
                .done(function(data) {

                }).always(function(data) {

                    console.log(data);

                })
                .fail(function(data) {

                    console.log(data);

                });

        });
        // ===========================================================
    }

};