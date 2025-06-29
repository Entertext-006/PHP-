<?php
//function sum(...$num){
//	return array_sum($num);
//}
//echo sum(2,8,9,8,10);
//function multiply($a,$b=2){
//	return $a*$b;
//}
//echo multiply(5);
//echo multiply(5,3);
//function mult($a,$b){
//	return $a*$b;
//}
//$var = mult(2,3);
//echo $var+10;
//$numbers=[5,7,8,9];
//for($i=0;$i<count($numbers);$i++);
//$numbers=[5,7,8,9];
//$num1=[2,3,5,6];
//array_unshift($numbers,89);
//print_r($numbers);
//array_shift($numbers);
//print_r($numbers);
//$s=array_merge($numbers,$num1);
//print_r($s);
//$a=array_slice($numbers,2,2);
//print_r($a);
//function sumArray($array) {
//    $sum = 0;
//    for ($i = 0; $i < count($array); $i++) {
//        $sum += $array[$i];
//    }
//    return $sum;
//}
//$array = array(1, 2, 3, 4, 5);
//echo "Sum of elements: " . sumArray($array);
//$array = [1, 2, 3, 4, 5];
//$sum = 0;
//foreach ($array as $value) {
//    $sum += $value;
//}
//
//echo "The sum is: " . $sum;
$array = [1, 2, 3, 4, 5]; 
$reversedArray = []; 

for ($i = count($array) - 1; $i >= 0; $i--) {
    $reverse[] = $array[$i];
}

print_r($reverse);
$array1 = [1, 2, 3, 4, 5]; 
$array2 = []; 

for ($i = 0; $i < count($array1); $i++) {
    $array2[] = $array1[$i]; 
}

print_r($array2); 
?>