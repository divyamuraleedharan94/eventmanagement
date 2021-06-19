<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7/dist/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap-3.3.7/js/dropdown.js"></script>
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
<img src="../images.jpg" width="60px" height="60px" style="margin-left:480px; padding-top:10px" />


<div class="dropdown" style="margin-left:800px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" ">Institution
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="approved.php">Approved Institution</a></li>
    <li><a href="backlisted.php">Backlisted Institution</a></li>
    
  </ul>
</div>
<div class="dropdown" style="margin-left:900px; margin-top:-35px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Events
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="newevent.php">New events</a></li>
  
</div>
<div class="dropdown" style="margin-left:1100px; margin-top:-35px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Scholarship
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="scholarship.php">Add Scholarship</a></li>
  
</div>
<div class="dropdown" style="margin-left:1100px; margin-top:-35px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Student Scholarship
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="approvescholarship.php">Approve Scholarship</a></li>
  
</div>
</div>
<form action="admin.php" method="post">
<input type="submit" name="viewallinstitution" value="view all institution" style="margin-left:400px; margin-top:200px; background-color:#0066CC; width:150px; height:100px" />
</form>
<form action="viewallevents.php" method="post">
<input type="submit" name="viewallevents" value="view all events" style="margin-left:800px; margin-top:-100px; background-color:#0066CC; width:150px; height:100px" />
</form>
<form action="viewscholarship.php" method="post">
<input type="submit" name="viewscholarship" value="view scholarship" style="margin-left:600px; margin-top:180px; background-color:#0066CC; width:150px; height:100px" />
</form>

</body>
</html>
