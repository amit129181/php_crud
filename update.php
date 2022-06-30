<?php

include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$qry = "UPDATE `student` SET `sname` = '$name', `saddress` = '$address', `sclass` = '$class', `sphone` = '$phone ' WHERE `student`.`sid` = $id";

$run = mysqli_query($con, $qry);

if ($run) {
    header("Location: index.php");
}