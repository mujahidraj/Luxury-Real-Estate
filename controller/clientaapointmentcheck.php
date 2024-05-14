<?php
require '../model/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phn_no = $_POST["phn_no"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $duration = $_POST["duration"];
    $pro_add = $_POST["pro_add"];
    $mls_no = $_POST["mls_no"];

 
    $sql = "INSERT INTO appointment (name, email, phn_no, date, time, duration, pro_add, mls_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $name, $email, $phn_no, $date, $time, $duration, $pro_add, $mls_no);

header('Location: ../view/clientdashboard.php');

    $stmt->execute();
}
else {
    echo "<script>alert('Form not submitted properly.');</script>";
    echo "<script>window.location.href='../view/client_appointment.php'</script>";
}
?>