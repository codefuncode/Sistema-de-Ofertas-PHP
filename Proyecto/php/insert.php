 <?php
include_once "connect.php";
//  Si los datos llegan todos correctamente entrara aquí si no
// llegan correctamente saltara esta paso y hará el else del condicional
if ($_POST['nombreOferta'] &&
    $_POST['descripcionOferta'] &&
    $_POST['precio'] &&
    $_POST['fechavigencia'] &&
    ($_FILES['imagen']['name'] != "") &&
    ($_FILES['video']['name'] != "")
) {

    //  Aquí se realizan los protomedicatos
    // --------------------------------------------
    $nombreOferta      = $_POST['nombreOferta']; // Recibir  el nombre de la oferta
    $descripcionOferta = $_POST['descripcionOferta']; // Recibir la descripción
    $precio            = $_POST['precio']; // Recibir el precio
    $fechavigencia     = $_POST['fechavigencia']; // Recibir  la fecha
    // --------------------------------------------

    $target_dir        = "upload/"; // variable con el nombre del directorio para guardar imagen
    $file              = $_FILES['imagen']['name']; // Nombre de la imagen
    $path              = pathinfo($file); // Extrae la ruta completa del fichero revivido
    $filename          = $path['filename']; // Extraemos solo en nombre de fichero
    $ext               = $path['extension']; // Extraemos solo la extensión del fichero
    $temp_name         = $_FILES['imagen']['tmp_name']; // Nombre temporal del fichero
    $path_filename_ext = $target_dir . $filename . "." . $ext; // Ruta completa del fichero

    $target_dir_video        = "upload/"; // variable con el nombre del directorio para guardar video
    $file_video              = $_FILES['video']['name']; // Nombre de la imagen
    $path_video              = pathinfo($file_video); // Extrae la ruta completa del fichero revivido
    $filename_video          = $path_video['filename']; // Extraemos solo en nombre de fichero
    $ext_video               = $path_video['extension']; // Extraemos solo la extensión del fichero
    $temp_name_video         = $_FILES['video']['tmp_name']; // Nombre temporal del fichero
    $path_filename_ext_video = $target_dir_video . $filename_video . "." . $ext_video; // Ruta completa del fichero

    //  Guardamos en una variable la consulta con los valores que trae el dato enviado por javascriprt en la matriz llamada $json

    //  consulta para almacenar ;los datos de la oferta
    $sql =
        "INSERT INTO ofertas (nombreOferta, descripcionOferta, precio,fechavigencia,imagen,video)
        VALUES ('$nombreOferta ', '$descripcionOferta ','$precio' ,'$fechavigencia','$path_filename_ext','$path_filename_ext_video')";

    //  Si la consulta fue exitosa almacenara el vídeo y la imagen
    //  el la carpeta upload del servidor y a su vez  la consulta solo
    //  guarda las rutas de los ficheros  para cuando javaScriprt los reciba
    // pueda agregar los enlaces de las imágenes y vídeos como atributos
    // de etiqueta para que se muestre la imagen correspondiente
    // a registro.
    if ($conn->query($sql)) {
// Mueve el fichero multimedia y lo copia en el servidor
        move_uploaded_file(
            $temp_name,
            $path_filename_ext);

        move_uploaded_file(
            $temp_name_video,
            $path_filename_ext_video);

        $res = array('respuesta' => "si");

        echo json_encode($res);

    } else {

        $res = array('respuesta' => "no");

        echo json_encode($res);
    }
// ---------------------------------

    $conn->close();

} else {

    $res = array('respuesta' => "no");

    echo json_encode($res);
}

// ===========================================================
