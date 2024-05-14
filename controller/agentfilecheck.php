<?php


    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/".$_FILES['myfile']['name'];

    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "Error";
    }

    $src2 = $_FILES['myfile2']['tmp_name'];
    $des2 = "upload/".$_FILES['myfile2']['name'];

    if(move_uploaded_file($src2, $des2)){
        echo "Success2";
    }else{
        echo "Error2";
    }

    header('location:../view/agent_legal_agreement.php');

?>