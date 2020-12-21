<?php
//
include_once 'connect.php';
//  variables que esperan los datos desde Ajax
$idUsuario = $_POST['idUsuario'];
$idOferta  = $_POST['idOferta'];
// ----------------------------------------------------------------------------------------------------------
//  Inserta la reservación y la fecha actual del servidor
$sql =
    "INSERT INTO `Reservacion`( `idUsuario`, `idOferta`, `Fecha`)
    VALUES ($idUsuario,$idOferta,now());";
// ----------------------------------------------------------------------------------------------------------
if ($conn->query($sql)) {

    $res = array(
        'respuesta' => "ok",
    );

    echo json_encode($res);

} else {

    $res = array(
        'respuesta' => "no",
    );

    echo json_encode($res);

}

$conn->close();
