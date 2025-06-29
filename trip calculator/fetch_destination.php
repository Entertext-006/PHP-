<?php
include 'db.php';
$sql="select * from destination";
$result= $conn->query($sql);
$destination=[];
while ($row=$result->fetch_assoc()){
	$destination[]=$row;}
echo json_encode($destination);
?>