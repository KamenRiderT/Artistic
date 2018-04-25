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
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <h2>Artist Sign-up</h2>
        <form action="signup_log.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username"/>
          </div>
          <div class="form-group">
            <label for="forename">Forename</label>
            <input type="text" class="form-control" name="forename"/>
          </div>
          <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" name="surname"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password"/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-info" name="submit">Sign-up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="menu2" class="tab-pane fade">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
          <h2>Members Sign-up</h2>
          <form action="signup-members_log.php" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"/>
            </div>
            <div class="form-group">
              <label for="forename">Forename</label>
              <input type="text" class="form-control" name="forename"/>
            </div>
            <div class="form-group">
              <label for="surname">Surname</label>
              <input type="text" class="form-control" name="surname"/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info" name="submit">Sign-up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
  <?php
  include_once 'footer.php';
  ?>
