<?php
//
include_once 'connect.php';

$datos = array(
    "nombreCliente"   => $_POST['nombreCliente'],
    "emailCliente"    => $_POST['emailCliente'],
    "telefonoCliente" => $_POST['telefonoCliente']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (nombreCliente, emailCliente, telefonoCliente)
VALUES (?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $nombreCliente, $emailCliente, $telefonoCliente);

$nombreCliente   = $datos['nombreCliente'];
$emailCliente    = $datos['emailCliente'];
$telefonoCliente = $datos['telefonoCliente'];

$stmt->execute();

$stmt->close();

$conn->close();
echo 'ok';
// echo json_encode($datos);
