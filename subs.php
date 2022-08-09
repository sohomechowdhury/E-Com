<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "furniture";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {


$email=$_POST["email"];

$check="INSERT INTO subscribe (email) VALUES ('$email')";
$rs = mysqli_query($conn,$check);
$checkp="SELECT * FROM subscribe WHERE email = '$email'";
$rsp = mysqli_query($conn,$checkp);
$datap = mysqli_num_rows($rsp);
if($datap >= 1) {
    echo "Email registered";
}
#if($rs)
#{echo "subscribed";}
#header("refresh:2;url=index.html");
}
?>