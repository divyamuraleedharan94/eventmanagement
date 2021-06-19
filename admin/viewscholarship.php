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
$c=$conn->query("select * from scholarship" );

?>
<table style="margin-left:300px; margin-top:60px"><tr><th>Scholarship name</th>
<th>Last date</th>
<th>Amount</th>
<th>Description</th>


</tr>
<?php
while($r=$c->fetch()){
?>
<tr>
<td><?php echo $r['name']?></td>
<td><?php echo $r['lastdate']?></td>
<td><?php echo $r['amount']?></td>
<td><?php echo $r['description']?></td>


<td>
<form action="open.php" method="post">
<input type="hidden" name="scid" value="<?php echo $r['scid'];?>" />
<input type="submit" name="open" value="open" /></form></td>

<td> <form action="close.php" method="post">
<input type="hidden" name="scid" value="<?php echo $r['scid'];?>" />
<input type="submit" name="close" value="close" /></td>
</tr>


<?php
}
?>
</tr></table>
</body>
</html>
