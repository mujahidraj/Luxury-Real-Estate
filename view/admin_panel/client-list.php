<?php
    
    require 'config.php';

   
    $result_client = mysqli_query($conn, "SELECT * FROM client");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent List</title>
    <link rel="stylesheet" href="design_agent_list.css">
</head>
<body>
    <form action="">
    <fieldset>
    <h1>Client List</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Password</th>
        </tr>
        <?php while($row_client = mysqli_fetch_assoc($result_client)) { ?>
        <tr>
            <td><?php echo $row_client['ID']; ?></td>
            <td><?php echo $row_client['Name']; ?></td>
            <td><?php echo $row_client['phone']; ?></td>
            <td><?php echo $row_client['username']; ?></td>
            <td><?php echo $row_client['email']; ?></td>
            <td><?php echo $row_client['DOB']; ?></td>
            <td><?php echo $row_client['gender']; ?></td>
            <td><?php echo $row_client['password']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </fieldset>

    <a href="admin-dashboard.php">Back</a> |
    <a href="signout.php">Signout</a>
    </form>
</body>
</html>