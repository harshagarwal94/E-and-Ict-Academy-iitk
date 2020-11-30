<?php
$arr=array(1=>11,2=>22);
$arr[]=33;
$arr["6"]=44;
foreach($arr as $value)
{
echo "<br>".$value;
}
unset($arr[1]);
echo arr[1];
unset($arr);
?>