<?php
session_start();
require_once("headerloginteach.php");
?>
<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->
<div class="form-group">
    <label for="exampleFormControlSelect2">Select Day</label>
    <select class="form-control" id="myInput" onChange="myFunction()">
      <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
    </select>
  </div>

<?php
require_once("Dataconnection.php");
$tid=$_SESSION["tid"];
?>
<table class="table table-striped" id="myUL">
<tr>
<th>Start Time</th>
<th>End Time</th>
<th>Subject Code</th>
<th>Room</th>
<th>Teacher ID</th>
<th>Day</th>
</tr>
<?php
$query2="select * from timetable where TeacherID='$tid' order by start_time";
$result2=mysqli_query($con,$query2);
if($result2==true and mysqli_num_rows($result2)>0)
{
    while($row=mysqli_fetch_array($result2))
    {
        ?>
        <tr>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[6];?></td>
        </tr>
        <?php
    }
}
?>

  <script>
  function myFunction() {
    // Declare variables
    //console.log("fuction call");
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    //console.log(filter);
    ul = document.getElementById("myUL");//change id of table
    //console.log(ul);
    li = ul.getElementsByTagName('tr');//change id of row
    //console.log(li);
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("td")[5];
        //console.log(a);
        if(a)
        {
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
}
  </script>
<?php
require_once("footer.php");
?>