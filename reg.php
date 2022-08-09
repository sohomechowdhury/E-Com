<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "furniture";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {

    echo " Joining unsuccessful 😔";
}
$yname=$_POST["yname"];
$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$conf=$_POST["cpass"];
if($pass==$conf){
$query="INSERT INTO registration (yname, uname, email, password,conf_password) VALUES ('$yname', '$uname', '$email', '$pass', '$conf')";
$run=mysqli_query($conn,$query);
if($run){
    echo "registered";
}}
else{
    echo "!! Password Dont Match !!";
}