<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="design_add_client.css">

</head>
<body>


    <form method="post" action="add-user-check.php">
        <fieldset>
            <h2 align="center">Add Client</h2>
            <hr>
            <table>
                <tr>
                    <td><label for="Name">Name:</label></td>
                    <td><input type="text" name="Name"></td>
                </tr>
                
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="DOB">Date of birth:</label></td>
                    <td><input type="date" name="DOB"></td>
                </tr>
               
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirm-password">Confirm Password:</label></td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
            </table>

            <button type="submit" name="reg-submit">Add</button>
        </fieldset>
    </form>
    <a href="admin-dashboard.php">Back</a>
</body>
</html>