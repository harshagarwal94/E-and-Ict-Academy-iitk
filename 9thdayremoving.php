<?php
$un=$_POST["username"];

$con=mysqli_connect("localhost","root","","ictcnb");
if(!$con)
die("server could not connected");
$sqlquery="delete from std where name='".$un."'";
$check=mysqli_query($con,$sqlquery);
if($check!=0)
    echo "removed succesfully";
else 
  echo "unable to remove";
?>