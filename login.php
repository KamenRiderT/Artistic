<?php
include_once 'header.php';
?>
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
  <?php
  include_once 'footer.php';
  ?>
