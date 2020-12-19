// https://web.dev/read-files/
// https://www.taniarascia.com/how-to-upload-files-to-a-server-with-plain-javascript-and-php/

var inputfile = document.getElementById('inputfile');
var enviar = document.getElementById('enviar');

enviar.addEventListener("click", function(argument) {
        const fileList = inputfile.files;
        console.log(fileList[0]);
    }

);

const url = 'process.php'
const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
    e.preventDefault()

    const files = document.querySelector('[type=file]').files
    const formData = new FormData()

    for (let i = 0; i < files.length; i++) {
        let file = files[i]

        formData.append('files[]', file)
    }

    fetch(url, {
        method: 'POST',
        body: formData,
    }).then((response) => {
        console.log(response);
    });
});