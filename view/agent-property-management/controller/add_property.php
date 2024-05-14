<?php
require '../../../model/config.php';

if (isset($_REQUEST['submit'])) {
    $property_name = $_REQUEST['property_name'];
    $type = $_REQUEST['type'];
    $location = $_REQUEST['location'];
    $size = $_REQUEST['size'];
    $room = $_REQUEST['room'];
    $price = $_REQUEST['price'];

    // Omit the first column assuming it's an auto-increment ID
    $query = "INSERT INTO properties (properties_name, type, location, size, room, price) VALUES ('$property_name', '$type', '$location', '$size', '$room', '$price')";

    echo "Generated SQL query: $query"; // Debugging statement

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Property added successfully";
        header('location:../../agentproperties_listing.php');
        exit; // After redirection, exit the script
    } else {
        echo "Error: " . mysqli_error($conn); // Print the specific error for debugging
    }
} else {
    echo "Form not submitted";
}
?>
