<?php

    require 'config.php';

    if (isset($_REQUEST['reg-submit']))
    {   
        $name = $_REQUEST['Name'];
        $phone = $_REQUEST['phone'];
        $username = $_REQUEST['username'];
        
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['DOB'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirm_password'];

        if ($name == '' || $phone == ''  || $username == '' || $email == '' || $dob == '' || $gender == '' || $password == '' || $confirmPassword == '')
        {
            echo "<script> alert('input fields cannot be empty!') </script>";
            echo "<script>window.location.href = 'signup.php'</script>";
        }

        else 
        {

            $duplicate = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username' OR phone = '$phone' OR email = '$email'");

        
            if(mysqli_num_rows($duplicate) > 0)
            {
                echo "<script> alert('Invalid username, email, or phone!') </script>";
                echo "<script>window.location.href = 'signup.php'</script>";
            }
            else 
            {
                if ($password == $confirmPassword)
                {
                    $query = "INSERT INTO client VALUES('', '$name','$phone', '$username',  '$email', '$dob', '$gender', '$password','$confirmPassword')";

                    mysqli_query($conn, $query);

                    echo "<script> alert('User added!') </script>";

                    $_SESSION['new-signup'] = 'true';

                    echo "<script>window.location.href = 'add-user.php'</script>";
                }
                else 
                {
                    echo "<script> alert('Password does not match! please try again.') </script>";
                    echo "<script>window.location.href = 'signup.php'</script>";
                }
            }
        }

    }

?>