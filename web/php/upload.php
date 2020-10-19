<?php

if (isset($_POST['but_upload'])) {
    $maxsize = 5242880; // 5MB

    $name        = $_FILES['file']['name'];
    $target_dir  = "videos/";
    $target_file = $target_dir . $_FILES["file"]["name"];

    // Select file type
    $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

    // Check extension
    if (in_array($videoFileType, $extensions_arr)) {

        // Check file size
        if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
        } else {
            // Upload
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                // Insert record
                $query = "INSERT INTO videos(name,location) VALUES('" . $name . "','" . $target_file . "')";

                mysqli_query($con, $query);
                echo "Upload successfully.";
            }
        }

    } else {
        echo "Invalid file extension.";
    }

}
