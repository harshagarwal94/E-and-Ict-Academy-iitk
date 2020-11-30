<?php
$un=$_POST["username"];

$c=$_POST["course"];
$b=$_POST["batch"];
$con=mysqli_connect("localhost","root","","ictcnb");
if(!$con)
die("server could not connected");
$sqlquery="update std set course='".$c."',batch='".$b."' where name='".$un."' ";
$check=mysqli_query($con,$sqlquery);
if($check!=0)
    echo "update succesfully";
else 
  echo "unable to update";
?>