<?php
$ar=array("ajay","vijay","ramesh","suresh","3.14","5");
for($i=0;$i<6;$i++)
{
echo $ar[$i]."<br>";
}
echo "<hr>";
foreach($ar as $value)
{
echo $value."<br>";
}
?>