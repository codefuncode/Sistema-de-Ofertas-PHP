 <?php
include_once "connect.php";
//  Las variables resividas llegan en  balco  revisar primero

$nombreOferta      = $_POST['nombreOferta'];
$descripcionOferta = $_POST['descripcionOferta'];
$precio            = $_POST['precio'];
$fechavigencia     = $_POST['fechavigencia'];

$age = array(
    "nombreOferta"      => $nombreOferta,
    "descripcionOferta" => $descripcionOferta,
    "precio"            => $precio,
    "fechavigencia"     => $fechavigencia);

echo json_encode($age);

// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO ofertas (nombreOferta, descripcionOferta, precio,fechavigencia)

// VALUES ('$nombreOferta', '$descripcionOferta','$precio' ,'$fechavigencia')";

// if ($conn->query($sql) === true) {

//     echo "New record created successfully";

// } else {

//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

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
//
//     $stmt->execute();

//     echo "New records created successfully";
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
?>

