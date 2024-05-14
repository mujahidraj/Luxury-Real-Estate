<?php

    require '../model/config.php';

    if (!isset($_SESSION['agent']) && !isset($_SESSION['client'])) {
        echo "<script>alert('You must login as an agent or client to view this page');</script>";
        echo "<script>window.location.href = '../view/login.php';</script>";
    }

     if(isset($_REQUEST['search'])) {
            $search = $_GET['search'];
            
        
            $sql = "SELECT id, properties_name, type, location, size, room, price FROM properties WHERE properties_name LIKE '%$search%'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                echo "<link rel='stylesheet' href='../design/design_propertysearch.css'>";
                echo "<body>";
                echo "<form align='center'>";
                echo "<fieldset>";
                echo "<img src='../view/logos/logo.png' alt='logo'>";
                echo "<h2>Search Results</h2>";
                echo "<table border='1' cellspacing='0' cellpadding='5' align='center'>";
                echo "<thead><tr><th>Property ID</th><th>Property Name</th><th>Property Type</th><th>Property Location</th><th>Property Size</th><th>Property Room</th><th>Property Price</th></tr></thead>";
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["properties_name"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "<td>" . $row["location"] . "</td>";
                    echo "<td>" . $row["size"] . "</td>";
                    echo "<td>" . $row["room"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</fieldset>";
                echo "</form>";
                echo "</body>";
            } 
            else {
                echo "<script>alert('Property doesnt match with Database. Please try again.');</script>";
                echo "<script>window.location.href='../view/agentdashboard.php'</script>";
            }
            $conn->close();
        }



?>
