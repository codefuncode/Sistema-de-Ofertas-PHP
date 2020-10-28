 <?php
include_once "connect.php";
//
// =================================
//  En la variable nombrada $json se recibirá el dato que nos envía JavaScript
$json = json_decode($_POST['json']);

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

// ===========================================================
//  Esta linea abre una conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

//  ---------------------------------------------------
//  Con este condicional verificamos la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//  ---------------------------------------------------

// -----------------------------------------------------------------------------------
//  Guardamos en una variable la consulta con los valores que trae el dato enviado por javascriprt en la matriz llamada $json
$sql = "INSERT INTO ofertas (nombreOferta, descripcionOferta, precio,fechavigencia)

VALUES ('$json->nombreOferta', '$json->descripcionOferta',' $json->precio' ,'$json->fechavigencia')";
// -----------------------------------------------------------------------------------

// ---------------------------------
//  Ejecutamos la consulta y si el resultado devuelve true entonces nos envia
if ($conn->query($sql) === true) {

    echo "true";

} else {

    echo "false";
}
// ---------------------------------

$conn->close();
// ===========================================================
