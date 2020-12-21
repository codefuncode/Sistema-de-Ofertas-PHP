<?php
include_once 'connect.php';

$sql = "SELECT nombreOferta, descripcionOferta, precio,fechavigencia,imagen,video,idoferta FROM ofertas";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {

        array_push($data,
            array(
                'nombreOferta'      => $row['nombreOferta'],
                'descripcionOferta' => $row['descripcionOferta'],
                'precio'            => $row['precio'],
                'fechavigencia'     => $row['fechavigencia'],
                'imagen'            => $row['imagen'],
                'video'             => $row['video'],
                'idoferta'          => $row['idoferta'],

            )
        );

    }

    echo json_encode($data);

} else {

    echo "0 results";
}
$conn->close();
