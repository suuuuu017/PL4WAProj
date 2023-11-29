<?php
    echo "<pre>";
    echo "POST data received:\n";
    print_r($_POST);

    // Print all data received via FILES (uploaded files)
    echo "\nFILES data received:\n";
    print_r($_FILES);
    echo "</pre>";
    echo "<br>";

    echo($_FILES[0]["tmp_name"]);
    echo "<br>";

    if (isset($_FILES[0]["name"])) {
        $target_dir = "./imgData/";
        $target_file = $target_dir . basename($_FILES[0]["name"]);
        if (move_uploaded_file($_FILES[0]["tmp_name"], $target_file)) {
            echo "console.log('The file ". basename( $_FILES[0]["name"]). " has been uploaded.');";
            echo "File has been uploaded successfully.";
        }
        else {
            echo "Error uploading the file.";
            echo "console.log('The file ". basename( $_FILES[0]["name"]). " has not been uploaded.');";

        }
    }
    else {
        echo "console.log('invalide ');";
        echo "Invalid request.";
    }
