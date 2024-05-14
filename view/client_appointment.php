<?php

    require '../model/config.php';

    if (!isset($_SESSION['client'])) {
        echo "<script>alert('You must login as a client to view this page');</script>";
        echo "<script>window.location.href = 'clientlogin.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="../design/design_clientappointment.css">
</head>
<body>
<form name="appointmentForm" method="post" action="../controller/clientaapointmentcheck.php" onsubmit="return validateForm()">
        <fieldset>
            <div class="logo">
            <a href="clientdashboard.php"><img src="logos/logo.png" alt="logo" ></a>
            </div>
            
            <h1 align="center">Appointment Form</h1>
            <table cellpadding="5" align="center">
                <tr>
                    <td><h2>Your Information</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Full Name :</b></td>
                    <td><input type="text" name="name" id="name" ></td>
                </tr>
                <tr>
                    <td><b>Email :</b></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><b>Phone Number :</b></td>
                    <td><input type="text" name="phn_no" id="phn_no"></td>
                </tr>
                <hr>
                <tr>
                    <td><h2>Appointment Details</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Date :</b></td>
                    <td><input type="date" name="date" id="date"></td>
                </tr>
                <tr>
                    <td><b>Time :</b></td>
                    <td><input type="time" name="time" id="time"></td>
                </tr>
                <tr>
                    <td><b>Duration :</b></td>
                    <td><input type="text" name="duration" id="duration"></td>
                </tr>
                <tr>
                    <td><h2>Property Information</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Property Address :</b></td>
                    <td><input type="text" name="pro_add"></td>
                </tr>
                <tr>
                    <td><b>MLS Number :</b></td>
                    <td><input type="text" name="mls_no" ></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="script/client_appointment.js"></script>
</body>
</html>
