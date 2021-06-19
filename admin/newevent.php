<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
table,th,td{
border:1px solid #000000;
}

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

<?php
include("connection.php");
$c=$conn->query("select * from events where status='approve'" );

?>
<table><tr><th>Event</th>
<th>Name</th>
<th>Cdate</th>
<th>Grant</th>
<th>Venue</th>
<th>Department name</th>
<th>Department username</th>
<th>Institution name</th>
<th>Institution Username</th>
<th>Uploads</th>
</tr>
<?php
while($r=$c->fetch()){
?>
<tr>
<td><?php echo $r['event']?></td>
<td><?php echo $r['name']?></td>
<td><?php echo $r['cdate']?></td>
<td><?php echo $r['grants']?></td>
<td><?php echo $r['venue']?></td>
<td><?php echo $r['depname']?></td>
<td><?php echo $r['dusername']?></td>
<td><?php echo $r['instname']?></td>
<td><?php echo $r['instusername']?></td>
<td><img src="../department/uploads/<?php echo $r['upload']?>" width="100" height="100"/></td>
<td>
<form action="approveadmin.php" method="post">
<input type="hidden" name="evid" value="<?php echo $r['evid'];?>" />
<input type="submit" name="accept" value="accept" /></form></td>

<td> <form action="disapproveadmin.php" method="post">
<input type="hidden" name="evid" value="<?php echo $r['evid'];?>" />
<input type="submit" name="reject" value="reject" /></td>
</tr>
</form>


<?php
}
?>
</tr></table>
</body>
</html>
