 <?php
include_once "connect.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare(
        "INSERT INTO ofertas
		(nombreOferta,
		descripcionOferta,
		precio,
		fechavigencia,
		video,
		imagen)
		VALUES (
		:nombreOferta,
		:descripcionOferta,
		:precio,
		:fechavigencia,
		:video,
		:imagen");
    $stmt->bindParam(':nombreOferta', $nombreOferta);
    $stmt->bindParam(':descripcionOferta', $descripcionOferta);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':fechavigencia', $fechavigencia);
    $stmt->bindParam(':video', $video);
    $stmt->bindParam(':imagen', $imagen);

    // insert a row
    $firstname = "John";
    $lastname  = "Doe";
    $email     = "john@example.com";
    $stmt->execute();

    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

