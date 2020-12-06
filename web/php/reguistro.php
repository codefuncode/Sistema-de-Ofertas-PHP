 <?php
include_once "connect.php";

$datos = array(
    "nombreCliente"   => $_POST['nombreCliente'],
    "emailCliente"    => $_POST['emailCliente'],
    "telefonoCliente" => $_POST['telefonoCliente'],
    "pass"            => $_POST['pass']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['emailCliente'];
$sql2  = "SELECT emailCliente FROM cliente WHERE emailCliente='$email'";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {

    echo 'El coreo ya esta en uso ';

} else {

    $sql = "INSERT INTO cliente (nombreCliente, emailCliente, pass, telefonoCliente)
VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $nombreCliente, $emailCliente, $pass, $telefonoCliente);

    $nombreCliente   = $datos['nombreCliente'];
    $emailCliente    = $datos['emailCliente'];
    $pass            = $datos['pass'];
    $telefonoCliente = $datos['telefonoCliente'];

    if ($stmt->execute() === true) {

        $stmt->close();

        echo "ok";

    } else {

        echo 'No';
    }

    $conn->close();
}

?>
