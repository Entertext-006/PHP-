<?php
$conn=mysqli_connect("localhost","root","root08","samp");
if(!$conn){
	echo "not connecteed!";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$query="Insert into samp(name,email) values ('$name','$email')";
	if(mysqli_query($conn,$query)){
		echo "query successful!!";
	}
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$query="Select * from samp";
	$r=mysqli_query($conn,$query);
	echo "<tr>
	<th>name</th>
	<th>email</th>";
	if($s=mysqli_fetch_array($r)){
		echo "<tr>";
		echo "<td>".$s['name']."</td>";
		echo "<td>".$s['email']."</td>";
		echo "</tr>";
	}
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<form action="new.php" method="post">
	Name<input type="submit" name="name">
	Email<input type="submit" name="email">
	</form>
</body>
</html>