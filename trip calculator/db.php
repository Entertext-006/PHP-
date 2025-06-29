<?php

$host='localhost';
$user='root';
$password='root08';
$database='trip';
$conn=new mysqli($host,$user,$password,$database);
if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}



?>