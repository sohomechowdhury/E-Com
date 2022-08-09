<?php
session_start();
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "furniture";
session_start(); 
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {

    echo " Joining unsuccessful 😔";
}

$email=$_POST["email"];
$pass=$_POST["pass"];



$query="SELECT * FROM registration WHERE email = '$email'";
$run=mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($run);
$datap = mysqli_num_rows($run);
    if($datap == 1) {
        if($pass==$data["password"]){

        echo "welcome  ".$email;
            $_SESSION['email']=$data['email'] ;
            $_SESSION['pass']=$data['password'];
          header('location:index-4.php');
        
        
        }
    elseif($pass!=$data["password"]){
        echo "!! Wrong Password !!";
    }
}
    else{
        echo"no logs found !! please register ";
        echo"<br>";
        echo"redirecting to Registration";
        header("refresh:2;url=register.html");
 

    }

    

?>
