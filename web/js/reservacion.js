// var data_formulario = document.querySelectorAll('.formulario [type="text"]');

// for (var i = 0; i < data_formulario.length; i++) {
//     console.log(data_formulario[i]);
// }

var input_usuario =
    document.querySelectorAll('.formulario input'),
    btn_input_usuario = document.querySelectorAll('.formulario button');

// for (var i = 0; i < input_usuario.length; i++) {
//     console.log(input_usuario[i]);
// }

btn_input_usuario[0].addEventListener('click', function(argument) {

    if (ValidateEmail(input_usuario[1].value)) {

        if (input_usuario[0] == "" &&
            input_usuario[1] == "" &&
            input_usuario[3] == "") {

            console.log("campos vacios");

        } else {

            $.ajax({
                    method: "POST",
                    url: "php/compraoferta.php",
                    data: {
                        nombreCliente: input_usuario[0].value,
                        emailCliente: input_usuario[1].value,
                        telefonoCliente: input_usuario[2].value,
                        idOferta: document.getElementById("ide_de_turno").textContent

                    }
                })
                .done(function(msg) {
                    console.log(msg);
                });

            console.log('todo perfecto')
        }

    } else {

        console.log("email incorecto")
    }

    function ValidateEmail(mail) {
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail)) {
            return (true)
        }
        // alert("You have entered an invalid email address!")
        return (false)
    }

});