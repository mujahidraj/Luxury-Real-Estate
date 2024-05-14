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
<title>Neighbor List</title>
<link rel="stylesheet" href="../design/design_neighbours.css">
</head>
<body>

<form method="post" align="center">
<a href="clientdashboard.php"><img src="logos/logo.png" alt="logo"></a>
    <fieldset align="center">
        
        <legend><h3>NEIGHBOR LIST</h3></legend>

        <table border="1" cellspacing="0" cellpadding="5" align="center">
            <thead>
                <tr>
                    <th></th>
                    <th>Neighbor ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Occupation</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
            <?php

            require '../model/config.php';

            $sql = "SELECT id, name, address, occupation, age FROM neighbour";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='id[]' value='" . $row["id"] . "'></td>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["occupation"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "</tr>";
                }
            } 
            else {
                echo "<tr><td colspan='6'>No neighbors found</td></tr>";
            }
            $conn->close();

            ?>
            </tbody>
        </table>
        <br><br>
        <a href="add_neighbor.php">
            <button type="button">Insert Neighbor</button>
        </a>

        <a href="delete_neighbor.php">
            <button type="button">Delete Neighbor</button>
        </a>

    </fieldset>
</form>

</body>
</html>
