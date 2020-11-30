<?php
if(isset($_GET["btn"]))
header("location:8thdayfunc4.php");
?>
<html>
<body>
<form action="<?php $_PHP_SELF?>" method="get">
<input type="submit" value="redirect" name="btn">
</form>
</body>
</html>