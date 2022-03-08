<?php
include 'dbconnection.php';
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
//checking whether submit button is already set
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = mysqli_real_escape_string($connect, htmlspecialchars($_POST['email']));
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);


    //check if password are identical
    if ($password === $cpassword){
      $sql = "SELECT * FROM registeruser WHERE email='$email'
              AND password='$password'";
      $result =mysqli_query($connect,$sql);

      //checking if the email is already in the database
      if (mysqli_num_rows($result )>0){
          echo '<script language="JavaScript">';
          echo 'alert ("email already exist")';
          echo '</script>';
      }else{
          $sql ="INSERT INTO registeruser(username,email,password)
             VALUES ('$username','$email','$password')";
          $result =mysqli_query($connect, $sql);

          //if the info is not entered into database
          if (!$result){
              echo '<script language="JavaScript">';
              echo 'alert ("Oops something went wrong")';
              echo '</script>';
          }
      }
   //javascript alert message if password are not the same
    }else{
        echo '<script language="JavaScript">';
        echo 'alert ("Password doesnt match")';
        echo '</script>';
    }
}
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
    <title>store management system</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register Parcel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Location</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<section>
        <div class="form1">
            <h5>Register</h5>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="index.php" role="button">Sign In</a>


            </form>
        </div>

</section


</body>

