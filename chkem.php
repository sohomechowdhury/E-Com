<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "furniture";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

    $email=$_POST["email"];

    $checkp="SELECT * FROM subscribe WHERE email = '$email'";
    $rsp = mysqli_query($conn,$checkp);
    $datap = mysqli_num_rows($rsp);
    if($datap >= 1) {
        echo "Email taken !! Press ESCAPE";
    }

?>