<?php
require_once("headeradmin.php");
session_start();
?>
<?php
if(@$_GET["err"]==1 || @$_GET["err"]==2)
{
  ?>
  <div style="color:red;text-align:center;">
  Duplicate record exist
  </div>
  <?php
}
?>
<form style="margin-left:2em;margin-right:2em;" action="insertteacherquery.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputCity">Teacher ID</label>
      <input type="text" class="form-control" id="inputCity" name="teacherid" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Name</label>
      <input type="text" class="form-control" id="inputCity" name="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Department</label>
      <input type="text" class="form-control" id="inputCity" name="department" required>
    </div>
  </div>    
  <input type="submit" class="btn btn-primary"/>
</form>
<?php
require_once("footer.php");
?>