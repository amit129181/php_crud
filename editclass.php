<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit Course</title>
</head>
<style>
.bgcolor {
    background: #f0f0f0;
    border-radius: 6px;
}

input:focus {
    outline: 0px !important;
    -webkit-appearance: none;
    box-shadow: none !important;
}
</style>
<?php
include 'connection.php';

$id = $_GET['id'];

$qry = "SELECT * FROM studentclass WHERE cid=$id";

$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>

<div class="container col-md-5 mt-3 bgcolor py-3">
    <div class="row">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" id="" aria-describedby=""
                    value="<?php echo $row['cname'] ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php
}
}

$name = $_POST['name'];

$qry2 = "UPDATE `studentclass` SET `cname` = '$name'  WHERE cid=$id";

$result2 = mysqli_query($con, $qry2);

if ($result2) {
    header("Location: addCourse.php");
}

?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
</body>

</html>