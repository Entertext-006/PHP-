<?php
setcookie("PESU", "c1");
if(isset($_COOKIE["PESU"]))
{
	echo $_COOKIE['PESU'];
}
else
	echo "cookie PESU not found yet";
?>