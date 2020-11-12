 <?php
include_once "connect.php";
//
// =================================
//  En la variable nombrada $json se recibirá el dato que nos envía JavaScript

// $json = json_decode($_POST['json']);

// ==========================================
// Solo para hacer pruebas de aplicación
// ==========================================

// $json = json_decode(
//     '{"nombreOferta":"test",
// "descripcionOferta":"descripcion de la oferta",
// "precio":"4",
// "fechavigencia":"2020-10-21"}');

// $nombreOferta      = $json->nombreOferta;
// $descripcionOferta = $json->descripcionOferta;
// $precio            = $json->precio;
// $fechavigencia     = $json->fechavigencia;

// echo $nombreOferta;
// echo '<br>';
// echo $descripcionOferta;
// echo '<br>';
// echo $precio;
// echo '<br>';
// echo $fechavigencia;
// echo '<br>';
// ========================================================
// =========================================================
// Se verifican las variables que contienen los datos  y si todas cumplen los requisitos entonces el procedimiento de ejecutará
// =========================================================
if ($_POST['nombreOferta'] &&
    $_POST['descripcionOferta'] &&
    $_POST['precio'] &&
    $_POST['fechavigencia'] &&
    ($_FILES['imagen']['name'] != "")
) {

    //  Aquí se realizan los protomedicatos
    // --------------------------------------------
    $nombreOferta      = $_POST['nombreOferta'];
    $descripcionOferta = $_POST['descripcionOferta'];
    $precio            = $_POST['precio'];
    $fechavigencia     = $_POST['fechavigencia'];
    // --------------------------------------------

    $target_dir        = "upload/"; // variable con el nombre del directorio para guardar imagen
    $file              = $_FILES['imagen']['name']; // Nombre de la imagen
    $path              = pathinfo($file); // Extrae la ruta completa del fichero revivido
    $filename          = $path['filename']; // Extraemos solo en nombre de fichero
    $ext               = $path['extension']; // Extraemos solo la extensión del fichero
    $temp_name         = $_FILES['imagen']['tmp_name']; // Nombre temporal del fichero
    $path_filename_ext = $target_dir . $filename . "." . $ext; // Ruta completa del fichero

    //  Esta linea abre una conexión con la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    // ==========================================================

// ===========================================================

//  ---------------------------------------------------
    //  Con este condicional verificamos la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//  ---------------------------------------------------

// -----------------------------------------------------------------------------------
    //  Guardamos en una variable la consulta con los valores que trae el dato enviado por javascriprt en la matriz llamada $json
    $sql = "INSERT INTO ofertas (nombreOferta, descripcionOferta, precio,fechavigencia,imagen)

VALUES ('$nombreOferta ', '$descripcionOferta ','$precio' ,'$fechavigencia','$path_filename_ext')";
// -----------------------------------------------------------------------------------

// ---------------------------------
    //  Ejecutamos la consulta y si el resultado devuelve true entonces nos envía
    if (($conn->query($sql) === true) && (file_exists($path_filename_ext) === false)) {
        move_uploaded_file($temp_name, $path_filename_ext);

        echo "true";

    } else {

        echo "false";
    }
// ---------------------------------

    $conn->close();

}

// ===========================================================
