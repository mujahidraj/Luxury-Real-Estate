<?php

    session_start();

    if (!isset($_SESSION['agent']) && !isset($_SESSION['client'])) {
        echo "<script>alert('You must login as an agent or client to view this page');</script>";
        echo "<script>window.location.href = 'agentlogin.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Search</title>
    <link rel="stylesheet" href="../design/design_agentsearch.css">
</head>
<body>

    
<form action="../controller/agent_search1.php" method="post" align="center" onsubmit="return validateForm()">
        <fieldset>
            <img src="logos/logo.png" alt="logo">
        <h1>Agent Search</h1>
        <label for="agent_name">Search Agent by Name:</label>
        <input type="text" id="agent_name" name="agent_name" id="agent_name" placeholder="Enter agent name"><br><br>
        <button type="submit" align="center">Search</button>
        </fieldset>
    </form>
    <script src="script/agent_search.js"></script>
</body>
</html>
