<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Neighbor</title>
    <link rel="stylesheet" href="../design/add_neighbour.css">
</head>
<body>
    
    <form method="post" action="add_neighbor_check.php">
        <fieldset>
            <legend class="legend-text">Add New Neighbor</legend>
            <table>
                <tr>
                    <td><label class="label" for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label class="label" for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address" required></td>
                </tr>
                <tr>
                    <td><label class="label" for="occupation">Occupation:</label></td>
                    <td><input type="text" id="occupation" name="occupation" required></td>
                </tr>
                <tr>
                    <td><label class="label" for="age">Age:</label></td>
                    <td><input type="number" id="age" name="age" required></td>
                </tr>
            </table>
        
            <input class="btn-submit" type="submit" name="add-neighbour" value="Add">
            
        </fieldset>
    </form>
    <a href="neighbours.php"><button class="btn">Cancel</button></a>
</body>
</html>
