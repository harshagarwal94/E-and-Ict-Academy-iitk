<?php
echo "<b>image name:</b>".$_FILES["img"]["name"]."<br>";

echo "<b>image type:</b>".$_FILES["img"]["type"]."<br>";
echo "<b>image size:</b>".$_FILES["img"]["size"]."<br>";
echo "<b>temporary location:</b>".$_FILES["img"]["tmp_name"]."<br>";
?>