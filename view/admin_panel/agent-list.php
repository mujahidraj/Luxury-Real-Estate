<?php
    
    require 'config.php';

    $result_agent = mysqli_query($conn, "SELECT * FROM agents");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent List</title>
    <link rel="stylesheet" href="design_agent_list.css">

</head>
<form action="">
    <fieldset>
</form>
<div class="container">
<body>
    <h1>Agent List</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Company name</th>
            <th>Company Address</th>
            <th>House type</th>
            <th>Gender</th>
            <th>Password</th>
        </tr>
        <?php while($row_agent = mysqli_fetch_assoc($result_agent)) { ?>
        <tr>
            <td><?php echo $row_agent['ID']; ?></td>
            <td><?php echo $row_agent['Name']; ?></td>
            <td><?php echo $row_agent['username']; ?></td>
            <td><?php echo $row_agent['phone']; ?></td>
            <td><?php echo $row_agent['email']; ?></td>
            <td><?php echo $row_agent['DOB']; ?></td>
            <td><?php echo $row_agent['company_name']; ?></td>
            <td><?php echo $row_agent['company_address']; ?></td>
            <td><?php echo $row_agent['house_type']; ?></td>
            <td><?php echo $row_agent['gender']; ?></td>
            <td><?php echo $row_agent['password']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
    </fieldset>
    <a href="admin-dashboard.php">Back</a> |
    <a href="signout.php">Signout</a>
        </form>
</body>
</html>