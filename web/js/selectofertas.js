var dataresivida,
    posicion = 0,
    id_oferta = "";

function pruebaseleccion(argument) {

    // var selecciona = document.getElementById('selecciona');

    function iniciodata() {
        targetaCompra = document.getElementById('targetaCompra');

        targetaCompra.style.display = "none";

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

                var nombreOfertaDisplay = document.getElementById('nombreOfertaDisplay');
                descripcionOferta = document.getElementById('descripcionOferta');

                // var imagenserver = document.getElementById('imagenserver');
                var videoserver = document.getElementById('videoserver');
                precio = document.getElementById('precio');

                // video.style.display = "none";

                nombreOfertaDisplay.innerHTML = data[posicion]['nombreOferta'];
                precio.innerHTML = "$ " + data[posicion]['precio'];
                // imagenserver.src = "php/" + data[data.length - 1]['imagen'];
                console.log(data[data.length - 1]['video']);
                videoserver.src = "php/" + data[posicion]['video'];

                descripcionOferta.innerHTML = data[posicion]['descripcionOferta'];

                console.log(data.length - 1);
                id_oferta = data[posicion]['idoferta'];

                // var srt = data[data.length - 1]['video'];

                // videoserver.src = srt.slice(3, 13);

            }).always(function(data) {

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

                }
                imajenofertaactual.src = "php/" + data[posicion]['imagen'];
                captionText.innerHTML = data[posicion]['nombreOferta'];
                prev.addEventListener("click", cambiaOferta);
                next.addEventListener("click", cambiaOferta);
                comporarOfertaAhora();

                function cambiaOferta(argument) {

                    console.log(this);
                    console.log(data.length);
                    console.log((posicion > data.lengt - 1));

                    if (this == next) {

                        posicion += 1;

                        if (posicion > data.length - 1) {
                            posicion = 0;
                        }

                        console.log('=====next=======');
                        console.log(posicion);
                        console.log('======next======');

                    } else if (this == prev) {
                        posicion -= 1;

                        if (posicion < 0) {
                            posicion = data.length - 1;
                        }
                        console.log('=======prev=====');
                        console.log(posicion);
                        console.log('=======prev=====');
                    }

                    console.log(posicion);

                    imajenofertaactual.src = "php/" + data[posicion]['imagen'];
                    captionText.innerHTML = data[posicion]['nombreOferta'];
                    videoserver.src = "php/" + data[posicion]['video'];
                    descripcionOferta.innerHTML = data[posicion]['descripcionOferta'];
                    precio.innerHTML = "$ " + data[posicion]['precio'];
                    id_oferta = data[posicion]['idoferta'];
                    console.log(data[posicion]['idoferta']);
                }

            })
            .fail(function(data) {

                console.log('fail');
                console.log(data);
            });

        var puruebimg = document.querySelectorAll('.mySlides img');

        for (var i = 0; i < puruebimg.length; i++) {
            console.log(puruebimg[i]);
        }

        function comporarOfertaAhora(argument) {

            cuerpo = document.getElementById('cuerpo');
            comprarAhora = document.getElementById('comprarAhora');

            // ===========================================================
            comprarAhora.addEventListener("click", function(argument) {
                cuerpo.style.display = "none";
                targetaCompra.style.display = "";
                document.querySelector(".formulario").style.display = "";
                console.log(dataresivida[posicion]['idoferta']);
                TargetaImagen.src = "php/" + dataresivida[posicion]['imagen'];
                TargetaTitulo.innerHTML = dataresivida[posicion]['nombreOferta'];
                TargetaPrecio.innerHTML = "$ " + dataresivida[posicion]['precio'];
                TargetaDescripcion.innerHTML = dataresivida[posicion]['descripcionOferta'];
                document.getElementById('ide_de_turno').innerHTML = id_oferta;

            });
            // ===========================================================
        }

    };
    iniciodata();

}