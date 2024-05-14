<?php
// Endpoint to handle notifications
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data['action'] === 'login') {
        // Here, you can handle the login notification
        $username = $data['username'];
        logInNotification($username);
    }
}

// Function to handle login notification
function logInNotification($username) {
    // You can replace this with actual notification logic (e.g., sending to a database or triggering an email)
    echo "$username has logged in.";
}
?>
