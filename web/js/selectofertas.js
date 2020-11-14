function pruebaseleccion(argument) {

    // var selecciona = document.getElementById('selecciona');

    function iniciodata() {

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

                var imagenserver = document.getElementById('imagenserver');

                nombreOfertaDisplay.innerHTML = data[data.length - 1]['nombreOferta'];

                // console.log(data[0]['imagen']);
                imagenserver.src = "php/" + data[data.length - 1]['imagen'];

            })
            .fail(function(data) {
                console.log('fail');
                console.log(data);
            });
    };
    iniciodata();

}