<?php 

    session_start();
    session_destroy();

    echo "<script>alert('You have been logged out as an agent');</script>";
    echo "<script>window.location.href = '../view/agentlogin.php'</script>";

  

  
?>