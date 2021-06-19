<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

ul
{display:inline;margin-top:40px;
list-style-type:none;
}
li{display:inline;}
a:link{
color:#FFFFFF}
</style>

</head>

<body>
<div class="asdxsa" style="border:1px solid black; background-color:#999999; ">
<img src="../images.jpg" width="60px" height="60px" style="margin-left:160px" />
<ul class="asd" style="margin-left:780px">

<li ><a href="../login.php" style="color:#FFFFFF"><b><i>Logout</i></b></li></a>
</ul></div>
<h1 style="text-align:center"><i><b>Add Scholarship</b></i></h1>
<form action="insertscholarship.php" method="post">
<table style="margin-left:500px;">
<tr><td>Scholarship name:</td><td><input type="text" name="name" value="" /></td></tr>
<tr><td><br /></td></tr>
<tr><td>Last date:</td><td><input type="date" name="lastdate" value="" /></td></tr>
<tr><td><br /></td></tr>
<tr><td>Amount:</td><td><input type="text" name="amount" value="" /></td></tr>
<tr><td><br /></td></tr>
<tr><td>Description:</td><td><input type="text" name="description" value="" /></td></tr>
<tr><td><br /></td></tr>
<tr><td><input type="submit" name="submit" value="submit" /></td></tr>
</table>




</form>
</body>
</html>
