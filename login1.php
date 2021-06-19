<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['login']))
{
    $i=$_POST['username'];
    $j=$_POST['password'];
    
    $c=$conn->prepare("select * from instreg where username=? and password=? and status='approve'");
    $arr=array($i,$j);
    $c->execute($arr);
    if($ff=$c->fetch())
    {
    header("location:institution/institution.php");
    }
	
	if(isset($_POST['login']))
{
    $a=$_POST['username'];
    $b=$_POST['password'];
    
    $d=$conn->prepare("select * from studentreg where username=? and password=?");
    $arr=array($a,$b);
    $d->execute($arr);
    if($f=$d->fetch())
    {
	
	//$_SESSION['y']=$f['eid'];
    header("location:student/student.php");
    }
if(isset($_POST['login']))
{
    $l=$_POST['username'];
    $m=$_POST['password'];
    
    $p=$conn->prepare("select * from admin where username=? and password=?");
    $arr=array($l,$m);
    $p->execute($arr);
    if($f=$p->fetch())
    {
//	$_SESSION['x']=$f['cid'];
    header("location:admin/homeadmin.php");
    }
	
	
	if(isset($_POST['login']))
{
    $l=$_POST['username'];
    $m=$_POST['password'];
    
    $p=$conn->prepare("select * from department where username=? and password=?");
    $arr=array($l,$m);
    $p->execute($arr);
    if($f=$p->fetch())
    {
//	$_SESSION['x']=$f['cid'];
    header("location:department/department.php");
    }
	}
	}
	}}
?>
</body>
</html>
