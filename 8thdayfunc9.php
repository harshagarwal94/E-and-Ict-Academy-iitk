<?php
function first()
{
echo "in first<br>";
}
function secondfun($arg='second')
{
echo "in second fun() argument was $arg.<br>";
}
function thirdfun($string)
{
echo $string;
}
$myfun="first"; 
$myfun();
$myfun="secondfun";
$myfun();
$myfun='thirdfun';
$myfun('test');
?>