<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login</title>
    <link rel="stylesheet" href="../design/design_agentlogin.css">
</head>
<body>
<form method='post' action='../controller/agentlogincheckdb.php' onsubmit="return validateForm()">
        <fieldset align="center">
           <a href="../index.php"><img src="logos/logo.png" alt="logo"></a>
            <h1>Agent Login</h1>
            <table align="center">
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login" name="submit"></td>
                </tr>
              
            </table>
        
                    <h3 align="center"> Forgot Password?</h3><a class="link" href="forgot_password_agent.php" align="center">Go</a><br><br>
                
        </fieldset>
    </form>
    <script src="script/agentlogin.js"></script>
</body>
</html>
