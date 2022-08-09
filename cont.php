<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "furniture";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {

    echo " Joining unsuccessful 😔";
}

$name=$_POST["name"];
$email=$_POST["email"];
$ph=$_POST["ph"];
$sub=$_POST["sub"];
$msg=$_POST["msg"];

$query="INSERT INTO connect (name, email, phone, subj, msg) VALUES ('$name', '$email', '$ph', '$sub', '$msg')";
$run=mysqli_query($conn,$query);
if($run){
    echo "Submitted";
}