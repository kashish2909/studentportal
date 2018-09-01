<?php
session_start();
require_once("headerloginteach.php");
?>
<?php
require_once("Dataconnection.php");
$rollno=$_SESSION["tid"];
$_SESSION["sub"]=$_GET["sub"];
$query="select distinct Class from teachinfo where TeacherID='$rollno'";
$result=mysqli_query($con,$query);
if($result==true and mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
        ?>
        <a href="takeattendance.php?class=<?php echo $row[0]?>">
        <button class="btn btn-primary btn-lg">
        <?php
        echo $row[0];
        ?>
        </button>
        </a>
        <?php
    }
}
else
	echo "No record found";
?>
<?php
require_once("footer.php");
?>