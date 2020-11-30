<?php 
if(isset($_POST["btn"]))
{
$un=$_POST["name"];
$con=mysqli_connect("localhost","root","","ictcnb");
if(!$con)
die("server could not connect");
$sql="select*from std where Name='".$un."'";
$res=mysqli_query($con,$sql);
echo "<table border=2 align='center'>";
echo "<tr><th>name</th><th>course</th><th>batch</th></tr>";
while($r=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$r['NAME']."</td><td>".$r['COURSE']."</td><td>".$r['BATCH']."</td></tr>";
}
echo "</table>";
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF?>" method="post">
<input type="text" name="name">
<br>
<input type="submit" value="fetch data" name="btn">
</form>
</body>
</html>