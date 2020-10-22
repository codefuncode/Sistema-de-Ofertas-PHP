function index(argument) {

    var img = document.getElementsByTagName('img');
    for (var i = 0; i < img.length; i++) {
        img[i].src = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.maqGevvNdExSKNlCwmkZuAHaEK%26pid%3DApi&f=1";
    }
    console.log(img.length);
}

function panelofertas(argument) {

    var btn = document.getElementById('enviar');

    btn.onclick =
        function(event) {
            event.stopPropagation();

            // =================================================
            $.ajax({
                    method: 'POST',
                    url: '../php/insert.php',
                    data: {
                        json: JSON.stringify(capturavalores())
                    },
                    dataType: 'json'
                })
                .done(function(data) {

                    console.log('done');
                    console.log('==================');
                    // console.log(data.nombreOferta);
                    // console.log(data.descripcionOferta);
                    // console.log(data.precio);
                    // console.log(data.fechavigencia);
                    console.log(data);
                    console.log('==================');

                })
                .fail(function(data) {
                    console.log('fail');
                    console.log(data);
                });
            // =================================================

            function capturavalores(argument) {

                var nombreOferta =
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

                let datadevuelta = {
                    "nombreOferta": nombreOferta.value,
                    "descripcionOferta": descripcionOferta.value,
                    "precio": precio.value,
                    "fechavigencia": fechavigencia.value
                }
                // console.log(fechavigencia.value);
                nombreOferta.value = "";

                descripcionOferta.value = "";

                precio.value = 0;

                fechavigencia.value = "";
                console.log(JSON.stringify(datadevuelta));
                return datadevuelta;

            }

        };

}