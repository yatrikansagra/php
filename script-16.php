<?php

$str="hello am yatri";
$vowels=array("a","i","o","u");

$count=0;

for($i=0;$i<strlen($str);$i++)
{
   if(in_array(strtolower($str[$i]),$vowels))
   {
     $count++;
	 }
	 }
echo "number is $str is:$count";
	 

?>