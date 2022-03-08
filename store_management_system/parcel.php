<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
    <title>store management system</title>
</head>
<style>
    body{
        background-color: white;
    }
</style>
<body>


<?php
require_once 'process.php';


?>
<div class="form1">
    <h5>Customer Detail</h5>

    <form action="process.php" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID number</label>
            <input type="number" class="form-control" id="username" name="IDnumber" required>
        </div>

        <div class="mb-3">
            <label for="parceltype" class="form-label">Enter Parcel Type</label>
            <input type="text" class="form-control" id="parceltype" name="ParcelType" required>
        </div>

        <div class="mb-3">
            <label for="parceltype" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="parceltype" name="phonenumber" required>
        </div>
        <br>
        <button type="submit" name="save" class="btn btn-primary">Save</button>


    </form>
</div>
</body>
