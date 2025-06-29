<?php
//$str="PESUNIVERSITY";
//	echo strlen($str)."<br>";
//
//$arr=["aa","bbb","ccc"];
//print_r($arr)."</br>";
//
//array_push($arr,"pallavi");
////print_r($arr);
//echo abs(-4)."<br>";
//echo ceil(4.3)."<br>";
//echo round(4.5)."<br>";

$file=fopen("new.txt","w");
if($file){
	$content=fwrite($file,"wtf?");
	echo "this is a joke".$content;
	fclose($file);
} else{
	echo "Flie cannot b opened";
}

?>