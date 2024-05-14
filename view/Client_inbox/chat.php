<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

// Establish connection to MySQL
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "chat_system";

// Check connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if sender and message are set
if (isset($_POST["sender"]) && isset($_POST["message"])) {
    $sender = $_POST["sender"];
    $message = $_POST["message"];
    
    // Insert message into database
    $sql = "INSERT INTO messages (sender, message) VALUES ('$sender', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Return messages from database
    $sql = "SELECT * FROM messages ORDER BY timestamp DESC"; // Fetch messages in ascending order of timestamp
    $result = $conn->query($sql);

    if ($result === FALSE) {
        echo "Error fetching messages: " . $conn->error;
    } else {
        $messages = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $messages[] = $row;
            }
            echo json_encode($messages);
        } else {
            echo "0 results";
        }
    }
}

$conn->close();
?>
