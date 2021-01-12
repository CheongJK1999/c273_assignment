<?php
$exerciseType = $_POST['exerciseEntry'];
$duration = $_POST['exerciseSlider'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c273_assignment";

$link = mysqli_connect($host, $username, $password, $db);

$query = "INSERT INTO exerciseentry(exerciseEntry, exerciseSlider) 
         VALUES ('$exerciseType', '$duration')";

mysqli_close($link);
?>
