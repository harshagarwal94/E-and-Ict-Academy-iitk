<?php
$email=$_POST["email"];
$proimg=$_FILES["img"]["name"];
$con=mysqli_connect("localhost","root","","dummy_img");
if(!$con)
die("server could not connect");
$sqlquery="insert into reg values('".$email."','".$proimg."')";
$check=mysqli_query($con,$sqlquery);
if($check!=0)
  {
move_upload_file($_FILES["img"]["tmp-name"],"image/".$_FILES["img"]["name"]);
echo "successfully registered";
}
else
echo "unsuccessfull";
?>