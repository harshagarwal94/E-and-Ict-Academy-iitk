<?php
class myclass
{
function __construct()
{
echo "construction under work";
}
function __destruct()
{
echo "destructor under work";
}
}
$object=new myclass; 
?>