<?php
require_once("headerloginteach.php");
require_once("Dataconnection.php");
session_start();
?>

<?php
for($i=0;$i<$_POST["count"];$i++)
{
    $temp1="rn".$i;
    $temp2="attend".$i;
    $temp3=$_POST[$temp1];
    $temp4=$_POST[$temp2];
    $temp5=$_SESSION['sub'];
    // echo $temp1;
    // echo $temp2;
    // echo $temp3;
    // echo $temp4;
    // echo $_SESSION['sub'];
    $querySelect="insert into data(date,RollNo,Subject,present) values(now(),'$temp3','$temp5','$temp4')";
    $result=mysqli_query($con,$querySelect);
    header("location:loginteach.php");
}
?>