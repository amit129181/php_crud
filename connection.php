<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {

} else {
    die("Error in database" . mysqli_error());
}

// $sql = "SELECT * FROM `student`";

// $result = mysqli_query($con, $sql);

// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['sid'];
//     echo $row['sname'];

// }