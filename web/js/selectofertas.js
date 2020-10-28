function pruebaseleccion(argument) {

    var selecciona = document.getElementById('selecciona');

    selecciona.addEventListener("click", selecciona);

    function selecciona(argument) {

        $.ajax({
            type: "POST",
            data: {
                data: "the_id"
            },
            url: "php/selecionaofertas.php",
            success: function(data) {
                console.log(data);
            }
        });
    }
}