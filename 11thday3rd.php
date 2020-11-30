<?php
session_start();
if(isset($_SESSION["UName"]))
echo $_SESSION["UName"];
else
header("location:11thday1st.php");
?>
<h3>third page</h3>
<a href="11thday2nd.php">previous</a>
<a href="deluser.php">remove</a> 