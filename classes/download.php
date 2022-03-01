<?php

function download($file, $target_dir) {
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    }
    else {
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 5000000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return 0;
    // if everything is ok, try to upload file
    }
    else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return 1;
        }
        else {
            return 0;
        }
    }
    return 0;
}