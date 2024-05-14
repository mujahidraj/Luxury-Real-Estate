<?php
    
    require '../model/config.php';

    if(!isset($_SESSION['client']))
    {
        header('Location: ../');
    }

    $result = mysqli_query($conn, "SELECT * FROM neighbour");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Neighbor</title>
    <link rel="stylesheet" href="../design/delete_neighbour.css">
</head>
<body>

<form method="post" action="delete_neighbor_check.php">
        <fieldset>
            <legend class="legend-text">Delete Neighbor</legend>
            
            <table>
                <tr>
                    <td><label class="label" for="name">ID:</label></td>
                    <td><input type="number" name="id"></td>
                </tr>
                
            </table>

            <button class="btn-submit" type="submit" name="delete-submit">Remove</button>
            
        </fieldset>
    </form>
    <a href="neighbours.php"><button class="btn">Cancel</button></a>
</body>
</html>