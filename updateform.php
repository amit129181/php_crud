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
            <h3>Edit Student</h3>

            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="my-2 py-3 bgcolor">
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" id="" aria-describedby="" value="">
                </div>
                <button type="Submit" name="showbtn" class="btn btn-sm btn-primary">Show</button>
            </form>
            <?php
include 'connection.php';

if (isset($_POST['showbtn'])) {
    $id = $_POST['id'];
    $qry = "SELECT * FROM student where sid=$id";

    $result = mysqli_query($con, $qry) or die("Database Error");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            ?>

            <form action="update.php" method="POST" class="py-3 bgcolor">

                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" id="" aria-describedby=""
                        value="<?php echo $id; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby=""
                        value="<?php echo $row['sname'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="" value="<?php echo $row['saddress'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Class</label>
                    <?php

            $sql2 = "SELECT * FROM studentclass";

            $result2 = mysqli_query($con, $sql2);

            echo '<select class="form-select" name="class" aria-label="Default select example">';
            while ($row2 = mysqli_fetch_assoc($result2)) {
                if ($row['sclass'] == $row2['cid']) {
                    $select = "selected";
                } else {
                    $select = "";
                }?>
                    <option {$select} value='<?php echo $row2['cid'] ?>'> <?php echo $row2['cname'] ?></option>
                    <?php }?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="" value="<?php echo $row['sphone'] ?>">
                </div>

                <button type="Submit" name="updateform" class="btn btn-sm btn-primary">Update</button>

            </form>

            <?php
}
    } else {
        echo '<h4>No Record Found</h4>';
    }

}

?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>