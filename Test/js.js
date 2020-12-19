function sendJSON() {

    // Creating a XHR object 
    let xhr = new XMLHttpRequest();
    let url = "submit.php";

    // // open a connection 
    xhr.open("POST", url, true);

    // Set the request header i.e. which type of content you are sending 
    xhr.setRequestHeader("Content-Type", "application/json");

    // Create a state change callback 
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(this.responseText);
            // Print received data from server 
            // result.innerHTML = this.responseText;

        }
    };

    // Converting JSON data to string 
    var data = JSON.stringify({
        "uno": btn[0].value,
        "dos": btn[1].value,
        "tres": btn[2].value,
        "cuatro": btn[3].value
    });

    // Sending data with the request 
    xhr.send(data);
}

var btn = document.querySelectorAll('input');

btn[4].onclick = function() {

    sendJSON();
}