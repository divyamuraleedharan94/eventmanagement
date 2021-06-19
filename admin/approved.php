<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title><style>
table,th,td{
border:1px solid #000000;
}
</style>

</head>

<body>
<?php
include("connection.php");
$c=$conn->query("select * from instreg where status='approve'");
?>
<table><tr><th>Institution name</th>
<th>Address</th>
<th>Contact</th>
<th>Principal name</th>
<th>Dsitrict</th>
<th>State</th>
<th>University</th>
<th>NAAC Grade</th>
<th>Username</th>
</tr>
<?php
while($r=$c->fetch()){
?>
<tr>
<td><?php echo $r['institution']?></td>
<td><?php echo $r['address']?></td>
<td><?php echo $r['contact']?></td>
<td><?php echo $r['principal']?></td>
<td><?php echo $r['district']?></td>
<td><?php echo $r['state']?></td>
<td><?php echo $r['university']?></td>
<td><?php echo $r['naac']?></td>
<td><?php echo $r['username']?></td><?php
}
?>

</tr></table>

</body>
</html>
