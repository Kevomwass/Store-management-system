<?php
require 'dbconnection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
    <style>
        body{
            background-color: white;
        }
        .copyright{
            margin-left: 650px;
            margin-top: 420px;
        }
        .table{
            background-color: rgba(30,50,250,0.3);
            padding: 13px;
            border-radius: 20px;
        }
    </style>
    <title>Display</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Downtown Stores</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Display.php">Register Parcel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOG OUT</a>
                </li>

             <li>
                 <div class="container">
                     <div class="row">
                         <form action="Display.php" method="post">
                             <div class="col-md-12">
                                 <div class="input-group mb-7">
                                     <button type="submit" class="btn btn-primary">search</button>
                                     <input type="text" name="search" class="form-control" placeholder="search ID">
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </li>



            </ul>
        </div>




    </div>
</nav>
<div class="container">
<button class="btn btn-primary my-5" ><a href="parcel.php" class="text-light tag">Add Customer</a> </button>
</div>

<table class="table">
    <thead>
     <tr>
         <th scope="col">SI number</th>
         <th scope="col">ID number</th>
         <th scope="col">Parcel Type</th>
         <th scope="col">Phone Number</th>
         <th scope="col">Operation</th>
     </tr>
    </thead>
    <tbody>
    <?php

   //FETCHING DATA FROM DATABASE AND DISPLAYING IT IN A TABLE IS DISPLAY.PHP

    $sql = "SELECT * FROM data";
    $result = mysqli_query($connect, $sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $IDnumber =$row['IDnumber'];
            $ParcelType =$row['ParcelType'];
            $phonenumber =$row['phonenumber'];

            echo '<tr>
          <td scope="row">'.$id.'</td>
          <td scope="row">'.$IDnumber.'</td>
          <td scope="row">'.$ParcelType.'</td>
          <td scope="row">'.$phonenumber.'</td>
          <td>
             <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
         </td>
      </tr>';
        }
    }


//    if (isset($_POST['search'])){
//        $filtervalues= $_POST['search'];
//        $query= "SELECT * FROM data WHERE IDnumber LIKE '%$filtervalues%'OR ParcelType LIKE '%$filtervalues%'OR phonenumber LIKE '%$filtervalues%'";
//        $result = mysqli_query($connect,$query);
//        $output='';
//
//        if (mysqli_num_rows($result)>0){
//            while ($row = mysqli_fetch_array($result)){
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php // $serial = $row['id']?><!--</td>-->
<!--                    <td>--><?php // $IDnumber= $row['IDnumber']?><!--</td>-->
<!--                    <td>--><?php // $ParcelType=$row['ParcelType']?><!--</td>-->
<!--                    <td>--><?php // $phonenumber=$row['phonenumber']?><!--</td>-->
<!--                </tr>-->
<!--               --><?php
//                $output .='<div> '.$serial.' '.$IDnumber.' '.$ParcelType.' '.$phonenumber.'</div>';
//            }
//        }
//    }else{
//       ?>
<!--            <tr>-->
<!--                <td colspan="3">No record found</td>-->
<!--            </tr>-->
<!--        --><?php
//    }
//    ?>

    </tbody>

</table>


<footer class="copyright">Downtown &copy; copyright 2020</footer>
</body>
</html>
