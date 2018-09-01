<?php
session_start();
require_once("DataConnection.php");
$subcode=isset($_POST["subcode"])?$_POST["subcode"]:"";
$teacherid=isset($_POST["teacherid"])?$_POST["teacherid"]:"";
$room=isset($_POST["room"])?$_POST["room"]:"";
$starttime=isset($_POST["starttime"])?$_POST["starttime"]:"";
$endtime=isset($_POST["endtime"])?$_POST["endtime"]:"";
$class=isset($_POST["class"])?$_POST["class"]:"";
$day=isset($_POST["day"])?$_POST["day"]:"";

$querycheck="select * from timetable where upper(day)='$day' and start_time='$starttime'";
echo $querycheck;
$res=mysqli_query($con,$querycheck);

if($res==true and mysqli_num_rows($res)>0)
{
    header("location:insertttentry.php?err=1");
}
else
{
    $queryinsert="insert into timetable(Subcode,TeacherID,room,start_time,end_time,class,day) values(upper('$subcode'),upper('$teacherid'),upper('$room'),'$starttime','$endtime',upper('$class'),upper('$day'))";
    echo $queryinsert;
    $result=mysqli_query($con,$queryinsert);
    header("location: insertttentry.php");
}
?>