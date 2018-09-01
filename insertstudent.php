<?php
session_start();
require_once("headeradmin.php");
?>
<?php
if(@$_GET["err"]==1 || @$_GET["err"]==2 || @$_GET["err"]==3)
{
  ?>
  <div style="color:red;text-align:center;">
  Duplicate record exist
  </div>
  <?php
}
?>
<form style="margin-left:2em;margin-right:2em;" action="insertstudentquery.php" method="post">
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
      <label for="inputCity">Branch</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Computer Engineering" name="branch" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Name</label>
      <input type="text" class="form-control" id="inputCity" name="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Roll No</label>
      <input type="text" class="form-control" id="inputCity" name="rollno" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Username</label>
      <input type="text" class="form-control" id="inputCity" name="username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Subgroup</label>
      <input type="text" class="form-control" id="inputCity" placeholder="COE1,COE2,COE3...." name="subgroup" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Phone No</label>
      <input type="text" class="form-control" id="inputCity" name="phoneno" required>
    </div>
  </div>    
  <input type="submit" class="btn btn-primary"/>
</form>
<?php
require_once("footer.php");
?>