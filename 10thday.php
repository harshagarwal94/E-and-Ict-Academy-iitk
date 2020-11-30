<?php 
$con=mysqli_connect("localhost","root","","ictcnb");
if(!$con)
die("server could not connect");
$sql="select*from std";
$res=mysqli_query($con,$sql);
echo "<table border=2 align='center'>";
echo "<tr><th>name</th><th>course</th><th>batch</th></tr>";
while($r=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$r['NAME']."</td><td>".$r['COURSE']."</td><td>".$r['BATCH']."</td></tr>";
}
echo "</table>";
?>