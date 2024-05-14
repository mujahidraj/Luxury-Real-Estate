<?php

    session_start();

    if (!isset($_SESSION['agent'])) {
        echo "<script>alert('You must login as an agent to view this page');</script>";
        echo "<script>window.location.href = 'agentlogin.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedded Google Map</title>
</head>
<body>
    <h1>MAP INTEGRATION</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8956680289334!2d90.41777177533815!3d23.822308778621377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7305eea2015%3A0x8805755fb04e861c!2sKuril%20Flyover!5e0!3m2!1sen!2sbd!4v1713276833556!5m2!1sen!2sbd" width="1280" height="760" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</body>
</html>
