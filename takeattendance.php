<?php
session_start();
require_once("headerloginteach.php");
?>
<?php
require_once("Dataconnection.php");
@$subj=$_GET['sub'];
$rollno=$_SESSION["tid"];
$count=0;
$temp=$_GET['class'];
$query="select * from logins where class='$temp'";
$result=mysqli_query($con,$query);
?>

<?php
?>
<form method="post" action="attutil.php">
<table class="table table-striped">
<thead>
      <tr> 
        <th>Roll No</th>
        <th>Name</th>
        <th>Attendance</th>
      </tr>
</thead>
<tbody>
<?php
if($result==true and mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
        ?>
        <tr>
        <?php

        ?>
        <td><input type="hidden" name="rn<?php echo $count; ?>" value="<?php echo $row[1];?>"><?php echo $row[1];?></td>
        <td><?php echo $row[5];?></td>
        <td><div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="attend<?php echo $count; ?>" value="present" checked>
        <span class="form-check-sign"></span>
        Present
    </label>
</div>

<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="attend<?php echo $count; ?>" value="absent">
        <span class="form-check-sign"></span>
        Absent
    </label>
</div></td>
        </tr>
        <?php
    $count=$count+1;
    }
    ?>
    <input name="count" type="hidden" value="<?php echo $count; ?>"/>
    <input type="submit"/>
    <?php
}
else
	echo "No record found";
?>
<?php
require_once("footer.php");
?>