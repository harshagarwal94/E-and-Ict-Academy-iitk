<?php
session_start();
if(isset($_SESSION["UName"]))
echo $_SESSION["UName"];
else
header("location:11thday1st.php");
?>
<h3>second page</h3>
<a href="11thday3rd.php">next</a>
<a href="deluser.php">remove</a> 