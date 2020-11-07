// https://web.dev/read-files/
// https://www.taniarascia.com/how-to-upload-files-to-a-server-with-plain-javascript-and-php/

var inputfile = document.getElementById('inputfile');
var enviar = document.getElementById('enviar');

enviar.addEventListener("click", function(argument) {

        console.log(inputfile.files[0]);

        $.ajax({
            url: "upload.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: {
                my_file: inputfile.files[0]
            }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false
            success: function(data) // A function to be called if request succeeds
            {
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

$(document).ready(function() {

    $("#but_upload").click(function() {

        var fd = new FormData();
        var files = $('#file')[0].files;

        // Check file selected or not
        if (files.length > 0) {
            fd.append('file', files[0]);

            $.ajax({
                url: 'upload.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        $("#img").attr("src", response);
                        $(".preview img").show(); // Display image element
                    } else {
                        alert('file not uploaded');
                    }
                },
            });
        } else {
            alert("Please select a file.");
        }
    });
});