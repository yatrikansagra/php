<?php
$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 
$num3 = $_POST['num3']; 

$largest = max($num1, $num2, $num3);

echo "The largest number is: " . $largest;
?>
