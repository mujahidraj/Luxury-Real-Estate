<?php

if(isset($_REQUEST['email']) && isset($_REQUEST['reset_code'])) {

    require '../model/config.php';
   
    $email = $_REQUEST['email'];
    $reset_code = $_REQUEST['reset_code'];

   
    if($reset_code === '1234') {
      
        $sql = "SELECT * FROM client WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            echo "Please enter your new password:";
            header('location:../view/enter_password.php');
            
        } else {
           
            echo "<script>alert('User not found.');</script>";
            echo "<script>window.location.href='../view/forgot_password.php'</script>";
        }
    } else {

        echo "<script>alert('Invalid Code.');</script>";
            echo "<script>window.location.href='../view/forgot_password.php'</script>";
    }

    
    $conn->close();
} else {
   
    echo "<script>alert('Email and Reset Password Required.');</script>";
    echo "<script>window.location.href='../view/forgot_password.php'</script>";
}
?>

