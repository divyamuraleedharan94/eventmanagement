<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
$a=$conn->prepare("insert into department(name,head,contact,username,password,cusername,institution) values(?,?,?,?,?,?,?)");
$arr=array($_POST['name'],$_POST['head'],$_POST['contact'],$_POST['username'],$_POST['password'],$_POST['cusername'],$_POST['institution']);
$a->execute($arr);
$c=$conn->prepare("insert into clogin(username,password,usertype) values(?,?,?)");
$ar=array($_POST['username'],$_POST['password'],'department');
$c->execute($ar);
}
?>
</body>
</html>
