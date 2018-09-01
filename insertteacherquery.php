<?php
session_start();
require_once("DataConnection.php");
$email=isset($_POST["email"])?$_POST["email"]:"";
$password=isset($_POST["password"])?$_POST["password"]:"";
$teacherid=isset($_POST["teacherid"])?$_POST["teacherid"]:"";
$name=isset($_POST["name"])?$_POST["name"]:"";
$department=isset($_POST["department"])?$_POST["department"]:"";

$querycheck="select TeacherID,Email from teachlogins";
$res=mysqli_query($con,$querycheck);

if($res==true and mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_array($res))
	{
		if($row[0]==$teacherid)
		{
			$err="1";
			header("location:insertteacher.php?err=$err");
			break;
		}
		else
		if($row[1]==$email)
		{
			$err="2";
			header("location:insertteacher.php?err=$err");
			break;
		}
		else
		{
			$queryinsert="insert into logins(teacherid,name,Password,email,Department) values(upper('$teacherid'),upper('$name'),'$password','$email',upper('$department'))";
            $result=mysqli_query($con,$queryinsert);
            header("location: insertteacher.php");
		}
	}
}
?>