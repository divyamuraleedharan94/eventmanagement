<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
table,th,td{
border:1px solid #000000;
}
</style>
</head>

<body>
<div class="asdxsa" style="border:1px solid black; background-color:#999999; ">
<img src="../images.jpg" width="60px" height="60px" style="margin-left:160px" />
<ul class="asd" style="margin-left:780px; list-style-type:none">

<li ><a href="../login.php" style="color:#FFFFFF"><b><i>Logout</i></b></li></a>
</ul></div>

<?php
include("connection.php");
$c=$conn->query("select * from student where status='pending'" );

?>
<table style="margin-left:300px; margin-top:60px"><tr><th>Student name</th>
<th>Scholarship name</th>

<th>Account no</th>
<th>Upload document</th>


</tr>
<?php
while($r=$c->fetch()){
?>
<tr>
<td><?php echo $r['student']?></td>
<td><?php echo $r['scholarship']?></td>
<td><?php echo $r['account']?></td>
<td><img src="../student/uploads/cute.jpg.jpg" <?php echo $r['upload'];?> width="100" height="100"/></td>


<td>
<form action="approvesc.php" method="post">
<input type="hidden" name="stid" value="<?php echo $r['stid'];?>" />
<input type="submit" name="approve" value="approve" /></form></td>

<td> <form action="disapprovesc.php" method="post">
<input type="hidden" name="stid" value="<?php echo $r['stid'];?>" />
<input type="submit" name="disapprove" value="disapprove" /></td>
</tr>


<?php
}
?>
</tr></table>
</body>
</html>
