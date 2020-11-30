<?php 
if(isset($_POST["btn"]))
{
$fn=$_POST["fname"];
$mn=$_POST["mname"];
$ln=$_POST["lname"];
$male=$_POST["male"];
$female=$_POST["female"];
$pass=$_POST["pass"];
$mail=$_POST["mail"];
$q=$_POST["qualification"];
 
$con=mysqli_connect("localhost","root","","assignment3");
if(!$con)
die("server could not connect");
$sqlquery= "insert into vitbhopal values('".$fn."','".$mn."','".$ln."','".$male."','".$female."','".$pass."','".$mail."','".$qualification."')";
$check=mysqli_query($con,$sqlquery);
if($check!=0)
echo "successfully registered";
else
echo "failed to register";
}
?>
<html>
<head>
<title>registration form</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="post">
<table border="2" align="center">
<tr><th colspan=2>VIT BHOPAL</th><tr>
<tr><td>FIRST NAME</td><td><input type="text" name="fname" ></td></tr>

<tr><td>MID NAME</td><td><input type="text" name="mname" ></td></tr>

<tr><td>LAST NAME</td><td><input type="text" name="lname" ></td></tr>

<tr><td>GENDER</td><td>male<input type="radio" name="male" >female<input type="radio" name="female"></td></tr>

<tr><td>PASSWORD</td><td><input type="password" name="pass" ></td></tr>

<tr><td>EMAIL</td><td><input type="email" name="mail" ></td></tr>
<tr><td>QUALIFICATIONS</td><td><input type="check box" name="qualification" ></td></tr>

<tr><td><input type="submit" name="btn" value="SUBMIT" ></td>

<td><input type="reset" name="btn" value="RESET" ></td></tr>
</table>
</form>
</body>
</html>
