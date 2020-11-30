<?php
class emp
{ 
var $empid;
var $name;
function __construct()  
 {
$this->empid=100;
$this->name="xyz";
}
function input($e,$n)
{
$this->empid=$e;
$this->name=$n;
}
function show()
{
echo $this->empid;
echo $this->name;
}
}
$ajay=new emp();
$ajay->input(101,"ajay singh");
$ajay->show();
$vijay=new emp();
$vijay->show();
?>