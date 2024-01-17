<html>
<body>
<form method="post">
enter a number : <input type="text" name="nm"><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>




<?php
if($_post)
{
	 $nm=$_post['nm'];
	 for($i=2;$i<=$nm-1;$i++)
	 {
		 if($nm % $i==0)
		 {
			 $value=True;
		 }
	 }
	 if(isset($value)&& $value)
		 
		 {
			 echo 'the number'.$nm.'is not prime';
		 }
		 else
		 {
			 echo 'the number'.$nm,'is prime';
		 }
}
				 



?>
