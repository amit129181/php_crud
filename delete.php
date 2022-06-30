<?php
include 'connection.php';

$id = $_GET['id'];

$qry = "DELETE FROM student WHERE sid=$id";

$result = mysqli_query($con, $qry);

if ($qry) {
    header("Location: index.php");
}