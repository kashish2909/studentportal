<?php
session_start();
require_once("headeradmin.php");
?>
<div class="alert alert-primary" role="alert">
  <?php
  echo "Welcome ".$_SESSION["namelog"];
  ?>
</div>
<center>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em;">
  <div class="card-body">
    <h4 class="card-title">Insert Teacher Record</h4>
    <!-- <p class="card-text">Here you take attendance.</p> -->
    <a href="<?php echo "insertteacher.php"?>  " class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em;">
  <div class="card-body">
    <h4 class="card-title">Insert Student Record</h4>
    <!-- <p class="card-text">Here you can see your time table.</p> -->
    <a href="<?php echo "insertstudent.php"?>" class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em;">
  <div class="card-body">
    <h4 class="card-title">Insert Time Table Entry</h4>
    <!-- <p class="card-text">Here you can see your time table.</p> -->
    <a href="<?php echo "insertttentry.php"?>" class="btn btn-primary">Go</a>
  </div>
</div>
<?php
require_once("footer.php");
?>