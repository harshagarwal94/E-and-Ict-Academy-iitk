<?php
$num=100;
echo $num;
$num=$num+1;
echo $num;
define("MAX",100);
echo "constant variable is:".MAX;
echo "<br>constant variable using constant method is:".constant("MAX");
?>