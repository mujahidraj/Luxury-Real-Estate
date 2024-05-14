<?php
require '../model/config.php';





if (!isset($_SESSION["Name"])) {
   
    header("Location: ../view/login.php");
    exit();
}


$name = $_SESSION["Name"];


$sql = "SELECT * FROM appointment WHERE name = '$name'";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>

    <link rel="stylesheet" href="../design/design_appointment.css">
</head>
<body>
<form action="">
    <fieldset>

  
<?php

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Date</th><th>Time</th><th>Duration</th><th>Property Address</th><th>MLS Number</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phn_no"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["duration"] . "</td>";
        echo "<td>" . $row["pro_add"] . "</td>";
        echo "<td>" . $row["mls_no"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No appointments found for this user.";
}
?>
  </fieldset>
</form>
</body>
</html>
