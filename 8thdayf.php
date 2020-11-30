<?php
if(isset($_POST["btn"]))
{
$a=$_POST["fname"];

$b=$_POST["sname"]; 
echo $a." ".$b;
}
?>
<html>
<body>
<form method="post" action="<?php $_PHP_SELF ?>">
<table border=2 align="center">

<tr><th colspan=2>registration</th><tr>
<tr><td>firstnumber</td><td><input type="text" name="fname"></td></tr>

<tr><td>secondnumber</td><td><input type="text" name="sname"></td></tr>
<tr><td colspan=2><input type="submit" value="send" name="btn"></tr>
</table>
</form>
</body>
</html>