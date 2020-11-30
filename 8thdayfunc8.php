<?php
function small_numbers()
{
return array(0,1,2);
}
list($first,$second,$third)=small_numbers();
echo $second;
$arr=small_numbers();
print_r($arr);
?>