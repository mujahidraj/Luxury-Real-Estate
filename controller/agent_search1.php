<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require '../model/config.php';
            $agent_name = $_POST['agent_name'];
            $sql = "SELECT name, phone, company_address FROM agents WHERE name LIKE '%$agent_name%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<link rel='stylesheet' href='../design/design_agentsearchresult.css'>";
                echo "<form>";
                echo "<fieldset align='center'>";
                echo "<img src='../view/logos/logo.png' alt='logo'>";
                echo "<h2>Search Result</h2>";
                echo "<table class='agent-table'>";
                echo "<tr><th>Name</th><th>Phone</th><th>Address</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["company_address"] . "</td>";
                    echo "</tr>";
                    echo "</fieldset>";
                    echo "</form>";
                   
                }
                echo "</table>";
                echo "<a href='../view/Client_inbox/index.html'>Do you Want to Chat?</a>";
            } else {
                echo "<p>No agent found with the name '$agent_name'.</p>";
            }
            $conn->close();
        }
        ?>