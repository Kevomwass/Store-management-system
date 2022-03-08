
<?php
require 'dbconnection.php';
if(isset($_POST['save'])) {
    $IDnumber = $_POST['IDnumber'];
    $ParcelType = $_POST['ParcelType'];
    $phonenumber = $_POST['phonenumber'];


    $sql = "SELECT * FROM data WHERE IDnumber='$IDnumber' AND phonenumber='$phonenumber'";
    $result =mysqli_query($connect,$sql);
    if (mysqli_num_rows($result )>0){
        echo '<script language="JavaScript">';
        echo 'alert ("ID number or Phone number already used")';
        echo '</script>>';
    }else {


        $insert = "INSERT INTO data(IDnumber,ParcelType,phonenumber) VALUES ('$IDnumber','$ParcelType','$phonenumber')";
        $sql = mysqli_query($connect, $insert);
        if (!$sql) {
            echo "error";
        } else {
            header("Location: Display.php");
        }

    }
}
