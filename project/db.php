<?php
$host="localhost";
$user="root";
$pass="root08";
$dbname="dynamic_layout";

$conn=mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
	die("connect failed: ".$conn->connect_error);
}else{
	echo "db connected";
}

?>