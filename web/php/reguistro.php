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
$sql2  = "SELECT *  FROM cliente WHERE emailCliente='$email'";

$result = $conn->query($sql2);

if ($conn->affected_rows > 0) {

    $res = [];
    while ($row = $result->fetch_assoc()) {

        array_push($res,
            array(
                'respuesta'     => "existe",
                'idcliente'     => $row['idcliente'],
                'nombreCliente' => $row['nombreCliente'],

            )
        );

    }

    echo json_encode($res);

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

        $res = array('respuesta' => "ok");

        echo json_encode($res);

    } else {

        $res = array('respuesta' => "no");

        echo json_encode($res);
    }

    $conn->close();
}

?>
