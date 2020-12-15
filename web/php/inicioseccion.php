 <?php
include_once "connect.php";

$datos = array(
    "emailCliente" => $_POST['emailCliente'],
    "pass"         => $_POST['pass']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['emailCliente'];
$pass  = $_POST['pass'];
$sql2  = "SELECT * FROM cliente WHERE emailCliente='$email' AND pass='$pass'";

$result = $conn->query($sql2);
$res    = [];
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
