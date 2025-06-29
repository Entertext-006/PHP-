<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<h2>Enter the name: </h2>
	<form method="post" action="set cookie.php">
	<h3>First name: <input type="text" name="t1"><br><br></h3>
	<h3>Last name: <input type="text" name="t3"><br><br></h3>
	<h3>Email: <input type="email" name="t6"><br><br></h3>
	<input type="submit" name="t2">  <input type="reset" name="t5">
	</form>
</body>
</html>
<?php
if(isset($_POST['t1'])){
$Firstname=$_POST['t1'];
echo "The name entered: ",$Firstname. "<br>";}
if(isset($_POST['t3'])){
$lastname=$_POST['t3'];
echo "The name entered: ",$lastname. "<br>";}
if(isset($_POST['t6'])){
$email=$_POST['t6'];
echo "The name entered: ",$email. "<br>";}
?>