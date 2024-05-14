<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Payment Form</title>
    <link rel="stylesheet" href="../design/design_advance_payment.css">
</head>
<body>
    <div class="container">
        <h2>Advance Payment Form</h2>
        <form id="paymentForm" action="../controller/advance_payment.php" method="post">
            <label for="clientName">Client Name:</label>
            <input type="text" id="clientName" name="clientName" required>

            <label for="agentName">Agent Name:</label>
            <input type="text" id="agentName" name="agentName" required>

            <label for="propertyAddress">Property Address:</label>
            <input type="text" id="propertyAddress" name="propertyAddress" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>

            <label for="date">Date of Transaction:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
