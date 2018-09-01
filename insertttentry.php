<?php
session_start();
require_once("headeradmin.php");
?>
<?php
if(@$_GET["err"]==1)
{
  ?>
  <div style="color:red;text-align:center;">
  Duplicate record exist
  </div>
  <?php
}
?>
<form style="margin-left:2em;margin-right:2em;" action="insertttquery.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Subcode</label>
      <input type="text" class="form-control" id="inputEmail4" name="subcode" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">TeacherID</label>
      <input type="text" class="form-control" id="inputPassword4" name="teacherid" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Start Time</label>
      <input type="time" class="form-control" id="inputCity" name="starttime" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">End Time</label>
      <input type="time" class="form-control" id="inputCity" name="endtime" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Class</label>
      <input type="text" class="form-control" id="inputCity" name="class" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Room</label>
      <input type="text" class="form-control" id="inputCity" name="room" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Day</label>
      <input type="text" class="form-control" id="inputCity" name="day" required>
    </div>
  </div>    
  <input type="submit" class="btn btn-primary"/>
</form>
<?php
require_once("footer.php");
?>