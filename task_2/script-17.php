<?php
function year($myyear)
{
	if($myyear % 400 == 0)
		print("it is leap year");
	
	else if($myyear % 100 == 0)
		print("it is not leap year")
	
	else if (($myyear % 4) == 0)
		print("it is leap year");
	
	else
		print("it is not a leap year");
}
$myyear = 2024;
year($myyear);

?>