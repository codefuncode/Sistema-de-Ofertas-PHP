 <?php
include_once "connect.php";

$datos = array(
    "emailCliente" => $_POST['emailCliente'],
    "pass"         => $_POST['pass']);

$email = $_POST['emailCliente'];
$pass  = $_POST['pass'];
//  Consulta para validar e;l usuario
$sql2 = "SELECT * FROM cliente WHERE emailCliente='$email' AND pass='$pass'";

$result = $conn->query($sql2);
$res    = [];

//  si afecto una fila devolver respuesta y el id del registro
if ($conn->affected_rows == 1) {

    while ($row = $result->fetch_assoc()) {

        array_push($res,
            array(
                'respuesta' => "si",
                'idcliente' => $row['idcliente'],

            )
        );
    }
} else {

    array_push($res,
        array(
            'respuesta' => "no",

        )
    );

}
echo json_encode($res);
$conn->close();

?>
