<?php
require_once("Dataconnection.php");
$rn=isset($_POST["rn"])?$_POST["rn"]:"";
$designation=isset($_POST["designation"])?$_POST["designation"]:"";
if($designation=="Student")
{
	$querySelect="select * from logins where user=$rn";
	$result=mysqli_query($con,$querySelect);
	if($result==true and mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$to=$row[2];
		$pass=$row[4];
		$subject="Password recovery(student teacher portal)";
		$message="Your password is ".$pass;
		$result=mail($to,$subject,$message);
		if($result==true)
		{
			header("location:forget.php?msg=2");
		}
		else
		{
			header("location:forget.php?msg=3");
		}
	}
	else
	{
		header("location:forget.php?msg=1");
	}
}
else
if($designation=="Teacher")
{
	$querySelect="select * from teachlogins where TeacherID='$rn'";
	$result=mysqli_query($con,$querySelect);
	if($result==true and mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$to=$row[3];
		$pass=$row[2];
		$subject="Password recovery(buysell)";
		$message="Your password is ".$pass;
		$result=mail($to,$subject,$message);
		if($result==true)
		{
			header("location:forget.php?msg=2");
		}
		else
		{
			header("location:forget.php?msg=3");
		}
	}
	else
	{
		header("location:forget.php?msg=1");
	}
}
?>