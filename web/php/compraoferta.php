<?php
//
include_once 'connect.php';

$datos = array(
    "nombreCliente"   => $_POST['nombreCliente'],
    "emailCliente"    => $_POST['emailCliente'],
    "telefonoCliente" => $_POST['telefonoCliente'],
    "idOferta"        => $_POST['idOferta']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cliente (nombreCliente, emailCliente, telefonoCliente,idOferta)
VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $nombreCliente, $emailCliente, $telefonoCliente, $idOferta);

$nombreCliente   = $datos['nombreCliente'];
$emailCliente    = $datos['emailCliente'];
$telefonoCliente = $datos['telefonoCliente'];
$idOferta        = $datos['idOferta'];
$stmt->execute();

$stmt->close();

$conn->close();
echo 'ok';
// echo json_encode($datos);
