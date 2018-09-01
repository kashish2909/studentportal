<?php
session_start();
require_once("headerlogin.php");
?>
<?php
require_once("Dataconnection.php");
$rollno=$_SESSION["rollno"];
$query="select distinct Subject from data where RollNo='$rollno'";
$result=mysqli_query($con,$query);
if($result==true and mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
        ?>
        <a href="showattendance.php?sub=<?php echo $row[0]?>">
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