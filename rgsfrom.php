<html>
<body>
<form action="output.php" method="post">

<table align="center" bgcolor="f3e5dc" cellpadding="10" cellspacing="10" >

<tr>
<td colspan="3" align="center">Registration from</td>
</tr>

<tr><td>Username:</td><td><input type="text" name="unm"style="border-color:red"></td></tr><br>
<tr>
<td>Password:</td><td><input type="text" name="pwd"style="border-color:red"></td>
</tr>
<tr>
<td>Name:</td><td><input type="text" name="nm"style="border-color:red"></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="add"style="border-color:red"></td>
</tr>
<tr>
<td>Country:</td>
<td>
<select id="cont" name="cout" style="border-color:red">
<option value="">(pleses select a country)</option>
<option value="india">India</option>
<option value="usa">usa</option>
<option value="pakistan">pakistan</option>
</select></td>
</tr>
<tr>
<td>ZIP Code:</td><td><input type="text" name="zip"style="border-color:red"></td>
</tr>
<tr>
<td>Email:</td><td><input type="email" name="eml"style="border-color:red"></td></tr>
<tr>
<td>Sex:</td><td><input type="radio" name="gen" value="male"><label>male</label></td>
<td><input type="radio" name="gen" value="Female">Female</td>
</tr>
<tr>
<td>Language:</td><td><input type="checkbox" name="lng" value="english"style="border-color:red">english</td>
<td><input type="checkbox" name="lng" value="gujrati"style="border-color:red">gujrati</td>
</tr>
<tr>
<td>About:</td>

<td ><textarea id="abt" name="abt" rows="3" cols="30"style="border-color:red" ></textarea>
</tr>
<tr><td><input type="submit" name="submit"style="border-color:red"></td></tr>
</table>
</body>
</html>





<?php



?>