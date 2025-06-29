<?php
if(isset($_SESSION['username'])){
	echo "welcome,".$_SESSION['username'];
}
?>