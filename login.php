<?php
include_once 'header.php';
?>
<div class="container">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#menu1">Artists</a></li>
  <li><a data-toggle="tab" href="#menu2">Members</a></li>
</ul>

<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">
    <h3>Artist Login</h3>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <h2>Login</h2>
          <form action="login_log.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password"/>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Members Login</h3>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <h2>Login</h2>
          <form action="login_log_members.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password"/>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info" name="login2">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <?php
  include_once 'footer.php';
  ?>
