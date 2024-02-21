<?php

/*$students=array("id","rollno","name","city","eno","divi","sem","sub","color","hobi");
print_r($students);
echo "<br>";



$students_detail=array("id"=>123,"rollno"=>1,"name"=>"yatri","city"=>"rajkot","eno"=>22080516,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"red","hobi"=>"cok");

print_r($students_detail);
foreach($students_detail as $value)
{
	echo "$value"."<br>";
}
*/

$students_master=array(
array("id"=>123,"rollno"=>1,"name"=>"yatri","city"=>"rajkot","eno"=>22080516,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"red","hobi"=>"cok"),
array("id"=>124,"rollno"=>2,"name"=>"aariya","city"=>"rajkot","eno"=>22080517,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"red","hobi"=>"cok"),
array("id"=>125,"rollno"=>3,"name"=>"archi","city"=>"rajkot","eno"=>22080518,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"red","hobi"=>"cok"),
array("id"=>126,"rollno"=>4,"name"=>"mansi","city"=>"surt","eno"=>22080519,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"pink","hobi"=>"cok"),
array("id"=>127,"rollno"=>5,"name"=>"dharmi","city"=>"morbi","eno"=>22080520,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"black","hobi"=>"cok"),
array("id"=>128,"rollno"=>6,"name"=>"shareya","city"=>"rajkot","eno"=>22080521,"divi"=>"b1","sem"=>4,"sub"=>"java","color"=>"pink","hobi"=>"singing"),
array("id"=>129,"rollno"=>7,"name"=>"priya","city"=>"goa","eno"=>22080522,"divi"=>"b1","sem"=>4,"sub"=>"english","color"=>"red","hobi"=>"danc"),
array("id"=>130,"rollno"=>8,"name"=>"mera","city"=>"rajkot","eno"=>22080516,"divi"=>"b1","sem"=>4,"sub"=>"php","color"=>"red","hobi"=>"cok")
);

//print_r($students_master);

/*foreach($students_master as $stud)
{
	print_r($stud);
	echo "<br>";
	
}*/



echo "<table bordor=2 colspan=2 rowspan=2>";
foreach($students_master as $val)
{
	echo "<tr>";
	echo "<td>".$val['id'].'</td>';
	echo "<td>".$val['rollno'].'</td>';
	echo "<td>".$val['name'].'</td>';
	echo "<td>".$val['city'].'</td>';
	echo "<td>".$val['eno'].'</td>';
	echo "<td>".$val['divi'].'</td>';
	echo "<td>".$val['sem'].'</td>';
	echo "<td>".$val['sub'].'</td>';
	echo "<td>".$val['color'].'</td>';
	echo "<td>".$val['hobi'].'</td>';
	echo "</tr>";
	
	
	print_r("$val");
}
echo "</table>";
	
?>	

