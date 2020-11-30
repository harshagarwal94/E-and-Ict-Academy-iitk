<?php
$a=5;
$f=1;
if($a== 0)
{
echo "the value of the factorial is 1";
}
else
{
  for($i=$a;$i>0;$i--)
  {
  $f=$f*$i;
   }
 echo $f;

}
?>