<?php
$name=$_POST['t1'];
echo "The name entered: ",$name. "<br>";
$email=$_POST['t3'];
echo "The email entered: ",$email."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['REQUEST_METHOD']."<br>";
?>
