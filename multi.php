<?php
$fno=$_REQUEST['sno'];
$lno=$_REQUEST['lno'];


for($i=$fno;$i<=$lno;$i++)
{
	echo "<table cellpadding=5 cellspcing=5 border=5 align=center>";
	for($j=1;$j<=10;$j++)
	{
		echo "<tr>";
		$mul=$i*$j;
		echo "<td>".$i." * ".$j." = ".$mul."</td>";
		echo "</tr>";
	}
	echo "</table><style>table{float:left;}</style>";
}
	
	






?>