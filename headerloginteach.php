<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <script src="main.js"></script>
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</head>
<body>
<?php
if(!isset($_SESSION["tid"]))
  header("location:index.php");
?>
<nav class="navbar navbar-expand-lg bg-primary" style="margin-bottom:0">
  <div class="container">
    <a class="navbar-brand" href="loginteach.php">Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="loginteach.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.thapar.edu/students/pages/webkiosk">Webkiosk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/Academic.pdf">Academic Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/Holiday.pdf">Holiday Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>