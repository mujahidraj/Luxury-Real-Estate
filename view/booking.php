<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="../design/booking.css">
</head>
<body>
    <div class="container">
        <a href="clientdashboard.php"><img src="logos/logo.png"></a>
        <h2>
            In order to advance booking, you need to pay BDT <?php echo rand(10,50); ?>,000/- in advance.
        </h2>
        
        <div class="buttons">
            <button onclick="paymentNotIntegrated()" class="pay-now">
                Pay Now
            </button>
            <a href="Client_inbox/index.html">
            <button class="talk-to-agent">
                Talk to our agent
            </button>
            </a>
            <a href="clientdashboard.php">
            <button>
                Back to dashboard
            </button>
            </a>
        </div>
    </div>

    <script>
        function paymentNotIntegrated() {
            alert('Payment system has not been integrated yet. Please stay in touch for further update.');
        }
    </script>
    
</body>
</html>