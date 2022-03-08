<?php
session_start();

if (!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url("img/store.png");
            background-color: lightskyblue;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-position-y: 20px;
        }
        .copyright{
            margin-left: 650px;
            margin-top: 290px;
        }
    </style>
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
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Display.php">Register Parcel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOG OUT</a>
                </li>

            </ul>

        </div>


    </div>
</nav>

<section class="section1">
    <div class="welcome">
        <h2 class="head"><strong>WELCOME TO DOWNTOWN STORES</strong></h2>
        <h4><i>Keep Your Parcel With Us</i></h4>
        <br>
        <br>

        <button class="btn btn-primary"><a href="about.php"  class="text-light tag">Learn more</a></button>
    </div>


</section>




<footer class="copyright">Downtown &copy; copyright 2020</footer>
</body>
<?php
