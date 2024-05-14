<?php

    require '../model/config.php';

    if (isset($_REQUEST['back']))
    {
        header('Location: neighbours.php');
    }

    if (isset($_REQUEST['add-neighbour']))
    {   
        $name = $_REQUEST['name'];
        $address = $_REQUEST['address'];
        $occupation = $_REQUEST['occupation'];
        $age = $_REQUEST['age'];

        if ($name == '' || $address == '' || $occupation == '' || $age == '')
        {
            echo "input fields cannot be empty!"; 
        }

        else 
        {
          $query = "INSERT INTO neighbour VALUES('', '$name', '$address', '$occupation', '$age')";

          mysqli_query($conn, $query);

          $_SESSION['add-neighbor'] = 'true';

          echo "<script>alert('Neighbour added!')</script>";
          echo "<script>window.location.href = 'neighbours.php'</script>";
            
        }

    }

?>