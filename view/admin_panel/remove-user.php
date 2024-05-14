<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="design_remove_client.css">

</head>
<body>


    <form method="post" action="remove-user-check.php">
        <fieldset>
             <h2 align="center">Remove Client By ID</h2>
<hr>
            
            <table>
                <tr>
                    <td><label for="name">ID:</label></td>
                    <td><input type="number" name="id"></td>
                </tr>
                
            </table>

            <button type="submit" name="remove-submit">Remove</button>
        </fieldset>
    </form>
    <a href="admin-dashboard.php">Back</a>
</body>
</html>