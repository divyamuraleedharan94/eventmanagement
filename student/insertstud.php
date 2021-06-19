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
$a=$conn->prepare("insert into studentreg(student,age,contact,branch,college,state,username,password) values(?,?,?,?,?,?,?,?)");
$arr=array($_POST['student'],$_POST['age'],$_POST['contact'],$_POST['branch'],$_POST['college'],$_POST['state'],$_POST['username'],$_POST['password']);
$a->execute($arr);
$c=$conn->prepare("insert into clogin(username,password,usertype) values(?,?,?)");
$ar=array($_POST['username'],$_POST['password'],'student');
$c->execute($ar);
}
?>
</body>
</html>
