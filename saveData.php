<?php
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

include 'connection.php';

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('$name','$address','$class','$phone')";

$result = mysqli_query($con, $sql) or die("Query Failed");

header("Location: http://localhost/crud/index.php");

mysqli_close($con);