<?php

    session_start();

    if (!isset($_SESSION['agent'])) {
        echo "<script>alert('You must login as an agent to view this page');</script>";
        echo "<script>window.location.href = 'agentlogin.php';</script>";
    }

    $userType = "Client";
    $username = "fidbi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="../design/design_notification.css">
</head>
<body>
    <form action="" align="center">

    <fieldset>
    <a href="agentdashboard.php"><img src="logos/logo.png" alt="logo"></a>
        <h1>Notification</h1>
    
    <table border="1">
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        
    </table>
    <a href="#">Mark all as read</a>
    <br><br>

    <a href="../view/agentdashboard.php">Back to dashboard</a> |
    <a href="signout.php">Signout</a>
    </fieldset>
    </form>
</body>


</html>