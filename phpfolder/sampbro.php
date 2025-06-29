<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<form action="sampbro.php",method="post">
		<label>Quantity:</label>
		<input type="text" name="t1"><br>
		<input type="submit" value="total">
	<?php
		$item="pizza";
		$qty=$_POST['t1'];
		$price=28.4;
		$total=null;
		echo "your total is {$qty} x {$price}";
		
	?>
	</form>
</body>
</html>