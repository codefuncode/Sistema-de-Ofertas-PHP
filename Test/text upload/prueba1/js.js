// https://web.dev/read-files/
// https://www.taniarascia.com/how-to-upload-files-to-a-server-with-plain-javascript-and-php/

//  seleccionamos el elemento input con la imagen 
var inputfile = document.getElementById('inputfile');

//  seleccionamos el botón de envío 
var enviar = document.getElementById('enviar');

//  Creamos el evento para enviar los datos 
enviar.addEventListener("click", function(argument) {
        //  Creamos una instancia de formData y le agregamos con el método append del objeto FormData los datos de la imagen seleccionada 
        let formData = new FormData();
        formData.append('my_file', inputfile.files[0]);
        console.log(formData);

        $.ajax({
            url: "upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {

                console.log(data);
            }
        });
    }

);

// const url = 'upload.php'
// const form = document.querySelector('form');

// form.addEventListener('submit', (e) => {
//     e.preventDefault()

//     const files = document.querySelector('[type=file]').files
//     const formData = new FormData()

//     for (let i = 0; i < files.length; i++) {
//         let file = files[i]

//         formData.append('files[]', file)
//     }

//     fetch(url, {
//         method: 'POST',
//         body: formData,
//     }).then((response) => {
//         console.log(response);
//     });
// });

// $(document).ready(function() {

//     $("#but_upload").click(function() {

//         var fd = new FormData();
//         var files = $('#file')[0].files;

//         // Check file selected or not
//         if (files.length > 0) {
//             fd.append('file', files[0]);

//             $.ajax({
//                 url: 'upload.php',
//                 type: 'post',
//                 data: fd,
//                 contentType: false,
//                 processData: false,
//                 success: function(response) {
//                     if (response != 0) {
//                         $("#img").attr("src", response);
//                         $(".preview img").show(); // Display image element
//                     } else {
//                         alert('file not uploaded');
//                     }
//                 },
//             });
//         } else {
//             alert("Please select a file.");
//         }
//     });
// });