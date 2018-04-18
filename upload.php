<?php
include_once 'header.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <h2>Upload Image</h2>
        <form action="upload_log.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image"/>
          </div>
          <div class="form-group">
            <label for="piece_name">Piece Name</label>
            <input type="text" class="form-control" name="piece_name"/>
          </div>
          <div class="form-group">
            <label for="caption">Piece Caption</label>
            <textarea type="text" class="form-control" name="caption"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info" name="upload">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include_once 'footer.php';
  ?>
