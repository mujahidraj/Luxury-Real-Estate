<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Example</title>
</head>
<body>
    <button id="loginBtn">Log In</button>
    
    <script>
        // Function to notify server about login
        function notifyLogin() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "backend.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            var data = JSON.stringify({ action: 'login', username: 'John' });
            xhr.send(data);
        }

        // Event listener for login button
        document.getElementById('loginBtn').addEventListener('click', notifyLogin);
    </script>
</body>
</html>
