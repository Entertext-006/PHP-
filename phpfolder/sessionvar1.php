<?php
$_SESSION["Name"]="Pallavi";
$_SESSION["Fav color"]="Black";
echo "Your name is: ".$_SESSION["Name"]."<br>";
echo "Your fav color is: ".$_SESSION["Fav color"];
session_destroy();
?>