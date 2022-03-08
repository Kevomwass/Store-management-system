<?php
$hostname = 'localhost';
$usernme = 'root';
$pass = '';
$db = 'register';

//DATABASE CONNECTION
$connect= new mysqli($hostname,$usernme,$pass,$db);
if (!$connect){
    die("Cant connect to db").$connect->connect_error();
}
?>
