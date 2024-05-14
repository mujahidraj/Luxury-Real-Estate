<?php

    require '../model/config.php';

    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['number'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $DOB = $_REQUEST['DOB'];
        $company_name=$_REQUEST['cname'];
        $company_address=$_REQUEST['caddress'];
        $house_type=$_REQUEST['type'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];

        
    

            if($password == $confirm_password)
                {
                    $query = "INSERT INTO agents VALUES('', '$name', '$phone', '$username', '$email','$DOB','$company_name','$company_address','$house_type','$gender','$password','$confirm_password','','','')";

                    mysqli_query($conn, $query);
                    header('location: ../view/agentfile.php');
                    echo "sign up successful";
                }
        }
    
    ?>