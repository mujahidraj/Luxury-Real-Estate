<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link rel="stylesheet" href="../design/design_clientlogin.css">
</head>
<body>

<form method='post' action='../controller/clientlogincheckdb.php' onsubmit="return validateForm()">
        <fieldset align="center">
            <div class="a">
        <a href="../index.php"><img src="logos/logo.png" alt="logo"></a>
        </div>
        <h1 align="center">Client Login</h1>

            <table align="center">
              
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" id="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
                </tr>
                
               
            </table>
    
            
           <h3>Forgot Password?</h3><a class="link" href="forgot_password.php">Go</a><br><br>
        </fieldset>
    </form>
    <script src="script/clientlogin.js"></script>
</body>
</html>
