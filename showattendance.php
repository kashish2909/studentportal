<?php
session_start();
require_once("headerlogin.php");
?>
<?php
require_once("Dataconnection.php");
$subj=$_GET['sub'];
$rollno=$_SESSION["rollno"];
$query="select * from data where RollNo='$rollno' and Subject='$subj'";
$result=mysqli_query($con,$query);
$attend=0;
$total=0;
?>

<?php
?>
<table class="table table-striped">
<thead>
      <tr>
        <th>Date</th> 
        <th>Roll No</th>
        <th>Subject</th>
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
        if($row[3]=='present')
        {
            $attend=$attend+1;
        }
        $total=$total+1;
        ?><td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        </tr>
        <?php
    }
    $perc=$attend/$total;
    ?>
    <div class="alert alert-warning" role="alert">
  Your Percentage is <?php echo $perc*100;?>
    </div>
    <?php
}
else
	echo "No record found";
?>
<?php
require_once("footer.php");
?>