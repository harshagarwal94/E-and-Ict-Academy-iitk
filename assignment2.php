<?php

if(isset($_GET["add"]))
{
$fn=$_GET["fname"];
$sn=$_GET["sname"];
$add=$fn+$sn;}
else if(isset($_GET["sub"]))
{$fn=$_GET["fname"];

$sn=$_GET["sname"];
$sub=$fn-$sn;}
else if(isset($_GET["mul"]))
{$fn=$_GET["fname"];

$sn=$_GET["sname"];
$mul=$fn*$sn;}
else if(isset($_GET["div"]))
{$fn=$_GET["fname"];

$sn=$_GET["sname"];
$div=$fn/$sn;}
else if(isset($_GET["mod"]))
{$fn=$_GET["fname"];

$sn=$_GET["sname"];
$mod=$fn%$sn;}


?>
<html>
<head>
<title>assignment2</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="get">
<table border="2" align="center" >
<tr><th colspan=2>calculator</th></tr>
<tr><td>first number</td><td><input type="text" name="fname"></td></tr>

<tr><td>second number</td><td><input type="text" name="sname"></td></tr>

<tr><td>result</td><td><input type="text" name="result" value="<?php if(isset($add))
echo $add;
else if(isset($sub))
echo $sub;
else if(isset($mul))
echo $mul;
else if(isset($div))
echo $div;
else if(isset($mod))
echo $mod;



?>"></td></tr>


<tr>
<td><input type="submit" name="add" value="+"></td>
<td><input type="submit" name="sub" value="-"></td>
<tr>
<td><input type="submit" name="mul" value="*"></td>
<td><input type="submit" name="div" value="/"></td>
</tr>
<tr>
<td><input type="submit" name="mod" value="%"></td>
</tr>


</table>
</form>
</body>
</html>
