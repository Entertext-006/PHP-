<?php
if(isset($_POST["t2"])){
	echo $_POST["t1"];}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<form method="post" action="second.php">
	<input type="text" id="t1"><br><br>
	<input type="submit" id="t2">
	</form>
</body>
</html>