<?php
session_start();
require_once("DataConnection.php");
$email=isset($_POST["email"])?$_POST["email"]:"";
$password=isset($_POST["password"])?$_POST["password"]:"";
$branch=isset($_POST["branch"])?$_POST["branch"]:"";
$name=isset($_POST["name"])?$_POST["name"]:"";
$rollno=isset($_POST["rollno"])?$_POST["rollno"]:"";
$username=isset($_POST["username"])?$_POST["username"]:"";
$subgroup=isset($_POST["subgroup"])?$_POST["subgroup"]:"";
$phoneno=isset($_POST["phoneno"])?$_POST["phoneno"]:"";

$querycheck="select name,user,email from logins";
$res=mysqli_query($con,$querycheck);

if($res==true and mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_array($res))
	{
		if($row[0]==$name)
		{
			$err="1";
			header("location:insertstudent.php?err=$err");
			break;
		}
		else
		if($row[1]==$user)
		{
			$err="2";
			header("location:insertstudent.php?err=$err");
			break;
		}
		else
		if($row[0]==$email)
		{
			$err="3";
			header("location:insertstudent.php?err=$err");
			break;
		}
		else
		{
			$queryinsert="insert into logins(name,user,email,phone,pass,orname,class,branch) values(upper('$username'),$rollno,'$email','$phoneno','$password',upper('$name'),upper('$subgroup'),upper('$branch'))";
            echo $queryinsert;
            $result=mysqli_query($con,$queryinsert);
            header("location: insertstudent.php");
		}
	}
}
?>