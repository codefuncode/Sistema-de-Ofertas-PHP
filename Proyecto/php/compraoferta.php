<?php
//
include_once 'connect.php';

$idUsuario = $_POST['idUsuario'];
$idOferta  = $_POST['idOferta'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Reservacion`( `idUsuario`, `idOferta`, `Fecha`) VALUES ($idUsuario,$idOferta,now());";

// $stmt->execute();

if ($conn->query($sql)) {

    $res = array(
        'respuesta' => "ok",
    );

    echo json_encode($res);
    $conn->close();

} else {

    $res = array(
        'respuesta' => "no",
    );

    echo json_encode($res);
    $conn->close();
}
