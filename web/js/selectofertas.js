function pruebaseleccion(argument) {

    // var selecciona = document.getElementById('selecciona');

    function iniciodata() {
        posicion = 0;

        $.ajax({
                method: 'POST',
                url: 'php/selecionaofertas.php',
                data: {
                    json: JSON.stringify({
                        "hola": "hola"
                    })
                },
                dataType: 'json'
            })
            .done(function(data) {
                // data = JSON.stringify(data);
                console.log(data);

                // for (var i = 0; i < data.length; i++) {

                //     console.log(data[i]['nombreOferta']);
                //     console.log(data[i]['descripcionOferta']);
                //     console.log(data[i]['precio']);
                //     console.log(data[i]['fechavigencia']);
                //     console.log("================= " + i + " =================");

                // }
                // --- 5 de noviembre se cambio esta linea para delegar los datos en la pagina 
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

                // var srt = data[data.length - 1]['video'];

                // videoserver.src = srt.slice(3, 13);

            }).always(function(data) {

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

    };
    iniciodata();

}