 <?php
include_once "connect.php";

$datos = array(
    "nombreCliente"   => $_POST['nombreCliente'],
    "emailCliente"    => $_POST['emailCliente'],
    "telefonoCliente" => $_POST['telefonoCliente'],
    "pass"            => $_POST['pass']);

$email = $_POST['emailCliente'];

$sql2 = "SELECT * FROM cliente WHERE emailCliente='$email'";
$sql3 = "SELECT * FROM cliente WHERE emailCliente='$email' LIMIT 1";

$result = $conn->query($sql2);

if ($conn->affected_rows) {

    $result = $conn->query($sql3);

    $row = $result->fetch_array(MYSQLI_ASSOC);

    $res = array(
        'respuesta' => "existe",
        'idcliente' => $row["idcliente"]);

    echo json_encode($res);

} else {

    $sql =
        "INSERT INTO cliente (nombreCliente, emailCliente, pass, telefonoCliente)
    VALUES (?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $nombreCliente, $emailCliente, $pass, $telefonoCliente);

    $nombreCliente   = $datos['nombreCliente'];
    $emailCliente    = $datos['emailCliente'];
    $pass            = $datos['pass'];
    $telefonoCliente = $datos['telefonoCliente'];

// Nota:  Verificar el operador de comparación es PHP no javascriprt por eso verificar

    if ($stmt->execute() === true) {

        $result = $conn->query($sql3);

        $row = $result->fetch_array(MYSQLI_ASSOC);

        $res = array(
            'respuesta' => "ok",
            'idcliente' => $row["idcliente"]);

        echo json_encode($res);
        $stmt->close();

    } else {

        $res = array('respuesta' => "no");

        echo json_encode($res);
    }

    $conn->close();
}

?>
