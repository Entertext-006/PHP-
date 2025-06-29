<?php

include 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
	$destination_id=$_POST['destination'];
	$num_travelers=$_POST['num_travelers'];
	
	$sql="select price_per_person from destination where id=$destination_id";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$total_price=$row['price_per_person']*$num_travelers;
	echo "booking successful! total cost: $". number_format($total_price,2);
}

?>