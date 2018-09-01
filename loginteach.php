<?php
session_start();
require_once("headerloginteach.php");
?>
<div class="alert alert-primary" role="alert">
  <?php
  echo "Welcome ".$_SESSION["tid"];
  ?>
</div>
<center>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em">
  <div class="card-body">
    <h4 class="card-title">Attendance</h4>
    <p class="card-text">Here you take attendance.</p>
    <a href="<?php echo "subject.php"?>  " class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em">
  <div class="card-body">
    <h4 class="card-title">See your Time Table</h4>
    <p class="card-text">Here you can see your time table.</p>
    <a href="ttteacher.php" class="btn btn-primary">Go</a>
  </div>
</div>
<div class="card text-center" style="width: 20rem;margin-top:3em;margin-left:2em;margin-right:2em">
  <div class="card-body">
    <h4 class="card-title">Insert Subject Info</h4>
    <p class="card-text">Here you can insert subject info.</p>
    <a href="<?php echo "subjectform.php"?>" class="btn btn-primary">Go</a>
  </div>
</div>
</center>
<?php
require_once("footer.php");
?>