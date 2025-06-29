<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INPUT PAGE</title>
</head>

<body>
	<h1>Input data for URL Generation</h1>
	<form action="output.php" method="get">
	<label for="parameter1">Parameter 1:</label>
	<input type="text" id="parameter1" name="parameter1" required>
	<br><br>
	
	<label for="parameter2">Parameter 2:</label>
	<input type="text" id="parameter2" name="parameter2" required>
	<br><br>
	
	<input type="submit" value="Generate URL">
	</form>
</body>
</html>