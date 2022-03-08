<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css">
    <script src="https://kit.fontawesome.com/0d20b0b621.js" crossorigin="anonymous"></script>
    <style>
        .copyright{
            margin-left: 650px;
            margin-top: 260px;
        }
        .tag {
            text-decoration: none;
            color: black;
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
                    <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Display.php">Register Parcel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOG OUT</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3 bg-primary p-5 my-5 )">
            <h5>Location</h5><br>
           <p>
               Hustlers plaza,<br>
               fl. no.16,<br>
               westlands,<br>
               Nairobi city.
           </p>
        </div>

        <div class="col-md-3 bg-primary my-5  mx-5 p-5">
            <h5>Contact Us</h5><br>
            <p>
                Tell no.<br>
                0746686605,
                0733657885<br>

                Gmail <br>
                mwangikelvin057@gmail.com
            </p>
        </div>

        <div class="col-md-3 bg-primary my-5 p-5">
            <h5>Social media links</h5><br>
            <p>
                <a href="facebook.com" role="button"  class="text-light fa fa-facebook tag"> Facebook</a><br><br>
                <a href="instagram.com" role="button" class="text-light  fa fa-instagram tag" > Instagram</a><br><br>
                <a href="twitter.com" role="button" class="text-light fa fa-twitter tag"> Twitter</a><br><br>
                <a href="telegram.com" role="button" class="text-light fa fa-telegram tag"> Telegram</a><br><br>
            </p>
        </div>


    </div>
</div>




<div class="footer">
<footer class="copyright">Downtown &copy; copyright 2020</footer>
</div>
</body>
<?php
