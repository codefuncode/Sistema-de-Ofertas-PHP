function pruebaseleccion(argument) {

    var selecciona = document.getElementById('selecciona');

    selecciona.onclick = function() {

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

                for (var i = 0; i < data.length; i++) {

                    console.log(data[i]['nombreOferta']);
                    console.log(data[i]['descripcionOferta']);
                    console.log(data[i]['precio']);
                    console.log(data[i]['fechavigencia']);
                    console.log("================= " + i + " =================");

                }

            })
            .fail(function(data) {
                console.log('fail');
                console.log(data);
            });
    };

}