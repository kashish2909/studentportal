<?php
session_start();
require_once("headerloginteach.php");
if(@$_GET["msg"]==1)
{
  ?>
  <div style="color:red;">
  <?php
  echo "Record already exist";
}
?>
</div>
<form style="margin-left:2em;margin-right:2em;" action="insertsubject.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Class</label>
      <input type="text" class="form-control" id="inputEmail4" name="class">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Subject</label>
      <input type="text" class="form-control" id="inputPassword4" name="subject">
    </div>
  </div>        
  <input type="submit" class="btn btn-primary"/>
</form>
<?php
require_once("footer.php");
?>