<?php

session_start();
require '../model/config.php';


if(isset($_FILES['profile_pic']) && !empty($_FILES['profile_pic']['name'])) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    if ($_FILES["profile_pic"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {

            $_SESSION['profile_pic'] = $target_file;
            echo "The file ". basename( $_FILES["profile_pic"]["name"]). " has been uploaded.";
            header('Location: view-profile-agent.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
