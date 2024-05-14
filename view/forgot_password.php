
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../design/design_forgotpassword.css">
</head>
<body>
    <form action="../controller/reset_pin_2.php" method="post" align="center">
        <fieldset>
            <img src="logos/logo.png" alt="logo" align="center">

            <h1>Forgot Password</h1>

                <label for="email"><b>Email: </b></label>
                <input type="email" name="email" id=""><br>

                <label for="reset_code"><b>Reset Pin:  </b></label>
                <input type="text" id="reset_code" name="reset_code"><br>

                <!-- <input type="submit" name="pin-submit" value="Submit"> -->
                <button type="submit" name="pin-submit" value="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
