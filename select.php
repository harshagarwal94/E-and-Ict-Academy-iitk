<?php
$name=$_GET["q"];


$con=mysqli_connect("localhost","root","","fullstack");
if(!$con)
	die("Server Could Not Connected");

$sql="select * from student where Name='".$name."'";
$rs=mysqli_query($con,$sql);
echo "<table border=2 align='center'>";
echo "<tr bgcolor='#dcdcdc' align='center'><th>Name</th>
<th>Course</th><th>Batch</th></tr>";
while($value=mysqli_fetch_assoc($rs))
{
echo "<tr><Td>".$value["Name"]."</td><td>".$value["Course"]
."</td><td>".$value["Batch"]."</td></tr>";
}
echo "</table>";
?>

