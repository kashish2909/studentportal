<?php
require_once('header.php');
?>
<div class="page-header clear-filter" style="margin-top:0em">
    <div class="page-header-image"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="post" action="logincode.php">
              <div class="card-header text-center">
                <div class="logo-container">

                </div>
              </div>
              <?php
              $res=isset($_GET['msg'])?$_GET['msg']:"0";
              if($res==1)
              {
              ?>
              <div style="color:red">
              <?php
                echo 'Enter correct details';
              }
              ?>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Roll No..." name="rn">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Password..." class="form-control" name="pass"/>
                </div>
              </div>
              <select class="form-control" id="exampleFormControlSelect1" name="designation">
                <option>Teacher</option>
                <option>Student</option>
                <option>Admin</option>
              </select>
              <div class="text-center">
                <input type="submit" class="btn btn-primary btn-round btn-lg btn-block"></a>
                <div class="pull-left">
                  <!-- <h6>
                    <a href="#pablo" class="link">Create Account</a>
                  </h6> -->
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="forget.php" class="link">Forgot Password?</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
require_once('footer.php');
?>