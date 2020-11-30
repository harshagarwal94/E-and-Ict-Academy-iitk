<?php
class demo
{
   var $name;   var $age;
   function setData($nam,$ag)
   { 
   $this->name=$nam;
   $this->age=$ag;
   }
   function getData()
   {
   echo "$this-> name is $this->age years old";
   }
}
$obj=new demo();
$obj->setData("Rahul",25);
$obj->gatData();
?>