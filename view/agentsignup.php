<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Signup Form</title>
    <link rel="stylesheet" href="../design/design_agentsignup.css">
</head>
<body>
<form name="signupForm" action="../controller/agentsignupcheck.php" method="post" enctype="multipart/form-data" align="center" onsubmit="return validateForm()">
    <a href="../index.php"><img src="logos/logo.png" alt="logo" align="center"></a>
        <fieldset>
        
            <legend><h1>Agent Signup Form</h1></legend>
            <table align="center">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td><input type="number" name="number"></td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>DOB :</td>
                    <td><input type="date" name="DOB"></td>
                </tr>
                <tr>
                    <td>Company Name :</td>
                    <td><input type="text" name="cname" ></td>
                </tr>
                <tr>
                    <td>Company Address :</td>
                    <td><input type="text" name="caddress"></td>
                </tr>
                <tr>
                    <td>House type :</td>
                    <td>
                        <input type="radio" name="type" value="Rental" >Rental
                        <input type="radio" name="type" value="Selling">Selling
                    </td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td>Confirm Password :</td>
                    <td><input type="password" name="confirm_password" ></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="script/agentsignup.js"></script>
</body>
</html>
