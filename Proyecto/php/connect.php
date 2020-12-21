 <?php
// https://www.w3schools.com/php/php_mysql_connect.asp
// Datos de conexión a la base de datos esta
// puede variar al correr el proyecto con una
// base de datos con credenciales distintas.
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Disney";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Error: " . $conn->connect_error);
}
?>
