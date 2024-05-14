<?php


require '../model/config.php';

session_start();

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if ($username==""||$password=="") 
    { 
        echo "Username or Password can't be null";
     }
     else{

        $query = "SELECT * FROM agents WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);
        $row = mysqli_fetch_assoc($result);
        if ($result->num_rows ==1) {
            
                $_SESSION['agent'] = "true";
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['DOB'] = $row['DOB'];
                $_SESSION['company_name'] = $row['company_name'];
                $_SESSION['company_address'] = $row['company_address'];
                $_SESSION['house_type'] = $row['house_type'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['password'] = $row['password'];
            
                header('location: ../view/agentdashboard.php');
        } 
        else {
            echo "<script>alert('Username and password Doesnt match.');</script>";
            echo "<script>window.location.href='../view/agentlogin.php'</script>";
        }
    }
?>