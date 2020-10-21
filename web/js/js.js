function index(argument) {

    var img = document.getElementsByTagName('img');
    for (var i = 0; i < img.length; i++) {
        img[i].src = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.maqGevvNdExSKNlCwmkZuAHaEK%26pid%3DApi&f=1";
    }
    console.log(img.length);
}

function panelofertas(argument) {

    var btn = document.getElementById('enviar');
    btn.onclick = function(event) {
        // console.log(event);

        event.stopPropagation();

        var datosretorno = capturavalores();

        // console.log(datosretorno);

        // $.post("../php/insert.php", {
        //         datosretorno
        //     },
        //     function(data, status) {
        //         console.log(("Data: " + data + "\nStatus: " + status));
        //     });

        //  Problemas con envio de datos al resivirse en el servidos 
        var url = "../php/insert.php";
        var data = capturavalores();
        var dataType = "json";
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function(argument) {
                console.log(argument);

                // console.log(JSON.stringify(argument));
            },
            dataType: dataType
        });

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

            let data = {
                "nombreOferta": nombreOferta.value,
                "descripcionOferta": descripcionOferta.value,
                "precio": precio.value,
                "fechavigencia": fechavigencia.value
            }
            // console.log(fechavigencia.value);
            // nombreOferta.value = "";

            // descripcionOferta.value = "";

            // precio.value = 0;

            // fechavigencia.value = "";

            return data;

        }

    };

}