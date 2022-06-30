<?php
$cname = $_POST['name'];

include 'connection.php';

$sql = "INSERT INTO `studentclass` (`cname`) VALUES ('$cname');";

$result = mysqli_query($con, $sql) or die("Query Failed");

header("Location: http://localhost/crud/index.php");