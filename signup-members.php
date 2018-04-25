<?php
include_once 'header.php';
?>

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
  <?php
  include_once 'footer.php';
  ?>
