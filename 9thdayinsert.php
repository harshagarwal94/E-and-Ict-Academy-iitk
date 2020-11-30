<?php
$un=$_POST["username"];

$co=$_POST["course"];
$b=$_POST["batch"];
$con=mysqli_connect("localhost","root","","ictcnb");
if(!$con)
die("server could not connected");
$sqlquery="insert into std values('".$un."','".$co."','".$b."')";
$check=mysqli_query($con,$sqlquery);
if($check!=0)
    echo "registered succesfully";
else 
  echo "unable to register";
?>