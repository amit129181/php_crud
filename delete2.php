<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>ADD</title>
    <style>
    input:focus,
    select:focus {
        outline: 0px !important;
        -webkit-appearance: none;
        box-shadow: none !important;
    }

    .bgcolor {
        background: #f0f0f0;
        border-radius: 8px;
    }
    </style>
</head>

<body>
    <?php include 'header.php'?>

    <div class="container col-md-4 mt-2">
        <div class="row">
            <h3>Delete Student Data</h3>

            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="my-2 py-3 bgcolor">
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" id="" aria-describedby="" value="">
                </div>
                <button type="Submit" name="showbtn" class="btn btn-sm btn-primary">Show</button>
            </form>
        </div>
    </div>

    <?php
include 'connection.php';

$id = $_POST['id'];

$qry = "DELETE FROM student WHERE sid=$id";

$qry_run = mysqli_query($con, $qry);

if ($qry_run) {
    header("Location: delete2.php");
}

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>