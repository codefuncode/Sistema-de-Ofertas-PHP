 <?php
include_once "connect.php";
//  Las variables resividas llegan en  balco  revisar primero
// =================================
$json = json_decode($_POST['json']);

// echo json_encode($json);
// =================================

// $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

// $json = json_decode($json);
$datos = array();

foreach ($json as $value) {
    array_push($datos, $value);

}

// $nombreOferta      = $json['nombreOferta'];
// $descripcionOferta = $json['descripcionOferta'];
// $precio            = $json['precio'];
// $fechavigencia     = $json['fechavigencia'];

$nombreOferta      = $datos[0];
$descripcionOferta = $datos[1];
$precio            = $datos[2];
$fechavigencia     = $datos[3];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ofertas (nombreOferta, descripcionOferta, precio,fechavigencia)

VALUES ('$nombreOferta', '$descripcionOferta','$precio' ,'$fechavigencia')";

if ($conn->query($sql) === true) {

// echo json_encode($json);

} else {

    // echo json_encode($json);
}

$conn->close();

// try {

//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // prepare sql and bind parameters
//     $stmt = $conn->prepare(
//         "INSERT INTO ofertas
//         (nombreOferta,
//         descripcionOferta,
//         precio,
//         fechavigencia)
//         VALUES (
//         :nombreOferta,
//         :descripcionOferta,
//         :precio,
//         :fechavigencia");

//     $stmt->bindParam(':nombreOferta', $nombreOferta);
//     $stmt->bindParam(':descripcionOferta', $descripcionOferta);
//     $stmt->bindParam(':precio', $precio);
//     $stmt->bindParam(':fechavigencia', $fechavigencia);
//     // $stmt->bindParam(':video', $video);
//     // $stmt->bindParam(':imagen', $imagen);

//     // insert a row

//     $stmt->execute();

//     echo "New records created successfully";
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
// ?>

