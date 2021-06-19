<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<style>
ul
{display:inline;margin-top:40px;
list-style-type:none;
}
li{display:inline;}
a:link{
color:#FFFFFF}
a:hover{
color:#FF00CC}
</style>
</head>

<body> 
<div class="asdxsa" style="border:1px solid black; background-color:#999999; ">
<img src="../images.jpg" width="60px" height="60px" style="margin-left:60px" />
<ul class="asd" style="margin-left:780px">
<li><a href="institution/instregister.php"><i><b>Institution Register</b></i></li></a>
<li><b>|</b></li>
<li><a href="../student/studentreg.php"><i><b>Student Register</b></i></li></a>
<li><b>|</b></li>
<li><a href="../admin/login.php"><b><i>Login</i></b></li></a>
</ul></div>
<h1 style="text-align:center"><i>Register</i></h1>
<form action="insertinst.php" method="post">
<table style="margin-left:500px">
<tr>
<td>Institution name</td>
<td><input type="text" name="institution" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Contact</td>
<td><input type="number" name="contact" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Principal name</td>
<td><input type="text" name="principal" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>District</td>
<td><input type="text" name="district" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>State</td>
<td><input type="text" name="state" value="" />
</td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>University</td>
<td><input type="text" name="university" value="" />
</td>
</tr><tr><td><br /></td></tr>
<tr>
<td>NAAC Grade</td>
<td><select name="naac">
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="No">No</option></select>
</td></tr><tr><td><br /></td></tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="" />
</td>
</tr><tr><td><br /></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" value="" />
</td>
</tr><tr><td><br /></td></tr>
<tr>

<td><input type="submit" name="register" value="register" style="margin-left:60px" />
</td>
</tr>
</table></form>



</body>
</html>
