<?php
//$w=10.11;
//$x="20";
//$y=10;
//$z='True';
//echo "implicit coversion: "."<br>",$w."<br>",$x."<br>",$y."<br>",$z."<br>";
//
//$s=10.24;
//$z=20;
//$w=(int)$s;
//$u=(float)$z;
//$sum=$z+$w;
//echo "Explicit coversion: "."<br>","Float",$s."<br>",$z."<br>",$w."<br>",$u."<br>";

$fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];

echo "Original Array:\n";
print_r($fruits);
array_push($fruits, "Grapes", "Pineapple");
echo "\nAfter array_push():";
print_r($fruits);
array_pop($fruits);
echo "\nAfter array_pop():\n";
print_r($fruits);
array_shift($fruits);
echo "\nAfter array_shift():\n";
print_r($fruits);
array_unshift($fruits, "Strawberry", "Peach");
echo "\nAfter array_unshift():\n";
print_r($fruits);
sort($fruits);
echo "\nAfter sort():\n";
print_r($fruits);
//
//function swapByValue($a, $b) {
//    $temp = $a;
//    $a = $b;
//    $b = $temp;
//    echo "Inside swapByValue: a = $a, b = $b\n";
//}
//function swapByReference(&$a, &$b) {
//    $temp = $a;
//    $a = $b;
//    $b = $temp;
//    echo "Inside swapByReference: a = $a, b = $b\n";}
//$string = "Hello, World!";
//$reversedString = strrev($string);
//echo "Reversed string is (built-in): ",$reversedString,"<br>";
//
//function reverseString($str) {
//    $reversed = "";
//    $length = strlen($str);
//    
//    for ($i = $length - 1; $i >= 0; $i--) {
//        $reversed .= $str[$i];
//    }
//    
//    return $reversed;
//}
//$string = "Hello, World!";
//$reversedString = reverseString($string);
//echo "reversed string is (user-defined): ",$reversedString;
//function fibonacci($n) {
//    $fib_series = [];
//    $a = 0;
//    $b = 1;
//
//    if ($n >= 1) {
//        $fib_series[] = $a;
//    }
//    if ($n >= 2) {
//        $fib_series[] = $b;
//    }
//
//    for ($i = 3; $i <= $n; $i++) {
//        $next = $a + $b;
//        $fib_series[] = $next;
//        $a = $b;
//        $b = $next;
//    }
//
//    return $fib_series;
//}
//
//$n = 10; 
//
//echo "Fibonacci series for $n terms: \n";
//$fib_series = fibonacci($n);
//echo implode(", ", $fib_series);
//function swapByValue($a, $b) {
//    $temp = $a;
//    $a = $b;
//    $b = $temp;
//    echo "Inside function (by value): a = $a, b = $b\n";
//}
//
//$a = 10;
//$b = 20;
//echo "Before swap (by value): a = $a, b = $b\n";
//swapByValue($a, $b);
//echo "After swap (by value): a = $a, b = $b\n";
?>