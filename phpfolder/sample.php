<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<form action="sample.php" method="post">
		<input type="text" name="t1">
		<input type="text" name="t2">
		<input type="submit" name="t3">
	</form>
</body>
</html>
<?php
$name=$_POST["t1"];
$lastname=$_POST["t2"];

echo $name,$lastname;
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SERVER_ADMIN'];

?>
