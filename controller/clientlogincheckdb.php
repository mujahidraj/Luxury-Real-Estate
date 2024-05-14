 <?php

require '../model/config.php';

session_start();
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '=', '{', '}', '[', ']', '|', '\\', '/', '<', '>', '?', ',', '.', '~', '`', "'", '"', ':', ';', '_', '-', ' '];

    for ($i = 0; $i < strlen($username); $i++) {
        if (in_array($username[$i], $characters)) {
            echo "Username contains disallowed characters.Username only contain letters and Whitespace";
            break;
        }
    } 
        if($username=="" || $password==""){
            echo "Username or Password can't remain null";
            }

        else if(strlen($password)>32){
            echo "Password contain maximum of 32 chracter (letter,character or number)";
        }
         else{
    
            $query = "SELECT * FROM client WHERE username='$username' AND password='$password'";
            $result = $conn->query($query);

            $row = mysqli_fetch_assoc($result);
    
            if ($result->num_rows ==1) {
                
                $_SESSION['client'] = "true";
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['DOB'] = $row['DOB'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['password'] = $row['password'];
                header('location: ../view/clientdashboard.php');
    
            } 
            else {
            

              echo "<script>alert('Username and password Doesnt match.');</script>";
              echo "<script>window.location.href='../view/clientlogin.php'</script>";
            }
        }
?>