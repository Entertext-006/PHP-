<?php
$a=20;
function f1(){
	$b=10;
	echo $GLOBALS['a'];
}
f1();
echo $a;
?>