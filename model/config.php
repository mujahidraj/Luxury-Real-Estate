<?php

session_start();

$hostname = 'localhost';
$dbusername= 'root';
$dbpass='';
$dbname='webtech01';

$conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);
?>