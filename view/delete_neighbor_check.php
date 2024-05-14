<?php

    require '../model/config.php';
    
    if (isset($_REQUEST['delete-submit']))
    {   
        $id = $_REQUEST['id'];

        if (isset($id))
        {
            $query = "DELETE FROM neighbour WHERE id = '$id'";

            mysqli_query($conn, $query);

            echo "User removed!";
            
            header('Location: neighbours.php');
        }
        else 
        {
            echo "id does not exist!";
            echo "<a href='delete_neighbor.php'>Back</a>";
        }

    }

    if (isset($_REQUEST['back-button'])) {
        header('Location: neighbours.php');
    }

?>