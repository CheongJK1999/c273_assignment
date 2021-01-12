<?php
$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$dob = $_POST['dob'];
$activeLevel = $_POST['activeLevel'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c273_assignment";

$link = mysqli_connect($host, $username, $password, $db);

$query = "INSERT INTO membersdetails(username, password, height, weight, dob, activeLevel) 
         VALUES ('$username', '$password', '$height', '$weight', '$dob', '$activeLevel')";

mysqli_close($link);

?>

