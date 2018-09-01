<?php
session_start();
require_once("Dataconnection.php");
$rollno=isset($_POST["rn"])?$_POST["rn"]:"";
$pwd=isset($_POST["pass"])?$_POST["pass"]:"";
//echo $_POST["designation"];
if($_POST["designation"]=='Student')
{
    $querySelect="select * from logins where user=$rollno and pass='$pwd'";
    $result=mysqli_query($con,$querySelect);
    if($result==true and mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION["rollno"]=$rollno;
        $_SESSION["namelog"]=$row[5];
        header("location:login.php");
    }
    else
        header("location:index.php?msg=1");
}
else if($_POST["designation"]=='Teacher')
{
    $querySelect="select * from teachlogins where TeacherID='$rollno' and Password='$pwd'";
    //echo $querySelect;
    $result=mysqli_query($con,$querySelect);
    if($result==true and mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION["tid"]=$rollno;
        $_SESSION["namelog"]=$row[2];
        header("location:loginteach.php");
    }
    else
        header("location:index.php?msg=1");
}
else if($_POST["designation"]=='Admin')
{
    $querySelect="select * from admintable where username='$rollno' and password='$pwd'";
    //echo $querySelect;
    $result=mysqli_query($con,$querySelect);
    if($result==true and mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION["tid"]=$rollno;
        $_SESSION["namelog"]=$row[0];
        //echo $_SESSION["tid"];
        header("location:admin.php");
    }
    else
        header("location:index.php?msg=1");
}
?>