<?php
// Establish connection to MySQL
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "chat_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to truncate messages table (remove all records)
$sql = "TRUNCATE TABLE messages";

if ($conn->query($sql) === TRUE) {
    echo "Chats cleared successfully";
} else {
    echo "Error clearing chats: " . $conn->error;
}

$conn->close();
?>
