<?php
if(isset($_POST["btn"]))
{
$name=$_POST["name"];
session_start();
$_SESSION["UName"]=$name;
header("location:11thday2nd.php");
}
?>
<html>
<body><form method="post" action="<?php $_PHP_SELF ?>">
<input type="text" name="name">
<input type="submit" value="send" name="btn">



</form>
</body></html>