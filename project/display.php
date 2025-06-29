<?php
$conn=mysqli_connect("localhost","root","root08","dynamic_layout");
if(!$conn){
	echo "not connected!";
}
$query="Select * from page_layout";
$result=mysqli_query($conn,$query);
while($row=mysqli_query($conn,$query)){
	foreach($row as $value){
		echo $value." ";
	}
}
mysqli_close($conn);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	
</body>
</html>