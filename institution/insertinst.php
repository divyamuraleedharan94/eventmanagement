<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['register']))
{
$a=$conn->prepare("insert into instreg(institution,address,contact,principal,district,state,university,naac,username,password,status) values(?,?,?,?,?,?,?,?,?,?,?)");
$arr=array($_POST['institution'],$_POST['address'],$_POST['contact'],$_POST['principal'],$_POST['district'],$_POST['state'],$_POST['university'],$_POST['naac'],$_POST['username'],$_POST['password'],'pending');
$a->execute($arr);
$c=$conn->prepare("insert into clogin(username,password,usertype) values(?,?,?)");
$ar=array($_POST['username'],$_POST['password'],'institution');
$c->execute($ar);
}
?>
</body>
</html>
