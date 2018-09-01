<?php
session_start();
require_once("DataConnection.php");
$name=$_SESSION["tid"];
$class=isset($_POST["class"])?$_POST["class"]:"";
$subject=isset($_POST["subject"])?$_POST["subject"]:"";

$querycheck="select * from teachinfo where TeacherID=upper('$name') and Class=upper('$class') and Subject=upper('$subject')";
echo $querycheck;
$res=mysqli_query($con,$querycheck);

if($res==true and mysqli_num_rows($res)>0)
{
    header("location: subjectform.php?msg=1");
}
else
{
    $queryinsert="insert into teachinfo(teacherID,class,subject) values(upper('$name'),upper('$class'),upper('$subject'))";
    $result=mysqli_query($con,$queryinsert);
    header("location: subjectform.php");
}
?>