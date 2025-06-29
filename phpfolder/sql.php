<?php
$_id=112;
$_name="Keerthi";
$_salary=29000;
$_bonus=2340;
$_rating="A";

$conn=mysqli_connect("localhost","root","root08","dwad");
if($conn){
	echo "db connected!!";
}
else{
	echo "Db not connected";}
$query1="Select * from student";
$r=mysqli_query($conn,$query1);

if($r){
	while ($s =mysqli_fetch_array($r)) {
		echo $s['Student_id']."-".$s['Student_name']."-".$s['Student_age']."-".$s['Student_email']."<br>";
	}
}else{
	echo "Error fetching recoeds: " .mysqli_error($conn);
}

mysqli_close($conn);
?>