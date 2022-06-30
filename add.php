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
    <div class="container col-md-4 py-4 mt-4 bgcolor">
        <div class="row">
            <h3>Add Student</h3>
            <form action="saveData.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Class</label>
                    <select class="form-select" name="class" aria-label="Default select example">
                        <option selected>Select Class</option>
                        <?php
include 'connection.php';

$sql = "SELECT * FROM studentclass";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    ?>

                        <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="">
                </div>

                <button type="submit" class="btn btn-primary">ADD COURSE</button>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>