<?php
include_once 'connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nombreOferta, descripcionOferta, precio,fechavigencia,imagen,video FROM ofertas";

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
            )
        );

    }

    echo json_encode($data);

} else {
    echo "0 results";
}
$conn->close();
// $json = json_decode($_POST['json']);
// echo json_encode($json);
