<?php
include 'dbconnection.php';

if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    //DELETING ID FROM DATABASE
    $sql =  "DELETE FROM data WHERE id=$id";
    $result =mysqli_query($connect,$sql);


    if ($result){
        header('location: Display.php');
    }else{
        echo '<script language="JavaScript">';
        echo 'alert ("not deleted")';
        echo '</script>';
    }
}