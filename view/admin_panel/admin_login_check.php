<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $admin_username = "admin";
    $admin_password = "admin";


    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $admin_username && $password === $admin_password) {
   
        header("Location: admin-dashboard.php");
        exit();
    } else {
    
        header("Location: admin_login.php?error=invalid_credentials");
        exit();
    }
} else {

    header("Location: admin_login.php");
    exit();
}
?>
