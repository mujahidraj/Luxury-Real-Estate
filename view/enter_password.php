<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="../design/design_enterpassword.css">
    <script>
        function validatePassword() {
            var password = document.getElementById("new_password").value;
            var passwordPattern = /^(?=.*[A-Z])(?=.*\d).{8,32}$/; // Regex for password validation

            if (!passwordPattern.test(password)) {
                alert("Password must meet the following criteria:\n\n" +
                      "- At least 8 characters\n" +
                      "- At most 32 characters\n" +
                      "- At least one capital letter\n" +
                      "- At least one integer number");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form action="../controller/update_password.php" method="post" align="center" onsubmit="return validatePassword()">
        <a href="../index.php">
            <img src="logos/logo.png" alt="logo" align="center"> 
        </a>
        <fieldset>
            <legend><h1>New password</h1></legend>
            <label for="email">Email: </label>
            <input type="email" name="email"> <br><br>

            <label for="new_password"><b>New Password</b></label>
            <input type="password" id="new_password" name="new_password" ><br><br>
            
            <button type="submit" name="pass-submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
