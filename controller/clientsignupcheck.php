<?php

    require '../model/config.php';

    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['number'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $DOB = $_REQUEST['DOB'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];

      
        
            if($password == $confirm_password)
            {
                    $query = "INSERT INTO client VALUES('', '$name', '$phone', '$username', '$email','$DOB','$gender','$password','$confirm_password')";

                    mysqli_query($conn, $query);
                    header('location: ../view/legal_agreement.php');
                    echo "sign up successful";
                
            }
        }
    