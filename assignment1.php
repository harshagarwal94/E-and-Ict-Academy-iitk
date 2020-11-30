<?php
if(isset($_POST["btn"]))
{
$fn=$_POST["firstno"];
$sn=$_POST["secondno"];
  if($fn>$sn)
  $greaterno=$fn;
  
  else
  $greaterno=$sn;
}
?>
   <html>
   <head>
   <title> 
assignment10
   </title>
   </head>
   <body>
<form  method="post" action="<?php $_PHP_SELF ?>" >
   <center>
<table border="3"  >
<tr><th colspan="2">greater no teller</th><tr>
<tr><td>first no.</td><td><input type="text" name="firstno"></td></tr>
<tr><td>second no.</td><td><input type="text" name="secondno"></td></tr>
<tr><td>resulting no.</td><td><input type="text" name="result" value="<?php if(isset($greaterno)) echo $greaterno;  ?>"></td></tr>
<tr><td><input type="submit" name="btn" value="greater no."></td></tr>
   </table>
   </center>
   </form>
   </body>
   </html>