<html>
<head>
<style="type/css">
</head>
<body>
<p color=blue><center><h3><b><i>this is a typical form</i></b></h3></center></p>
<table border=4 background-color:red; >
<form>
YOUR'S NAME<input type="text"><br>
FATHER'S NAME<input type="text"><br>
MOTHER'S NAME<input type="text"><br>
PASSWORD<input type="password" name="pass"><br>
CONFIRM PASSWORD<input type="password" name="conpass"><br>
<?php if(pass!=conpass)
echo "invalid password";
?>
GENDER male<input type="radio" name="q1">female<input type="radio" name="q1">other<input type="radio" name="q1"><br>
QUALIFICATION<input  type="checkbox" name="d">10th<input  type="checkbox" name="d">12th<input  type="checkbox" name="d">graduate<input  type="checkbox" name="d">other<br>
COUNTRY<select> 
<option>--select the country--</option>
<option>INDIA</option>
<option>NEPAL</option>
</select></br>
ADDRESS<input type="text area"><br>
upload your image<input type="file"><br>
<input type="submit" value="submit">      <input type="reset" value="cancel">




</form>
</table>
</body>
</html>