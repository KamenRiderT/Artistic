<?php
include_once 'header.php';
 ?>
  <!-- One card containing a modal for each of the 6 Artists featured that week-->
  <div class="container text-center">
    <h2>Weekly Rankings</h2>
    <?php
     if (isset($_SESSION['u_id'])) {
       echo "You are logged in";
       echo '<div class="row">
                <div class="col-md-1">
                <button type="button" name="side_bar"
                class="btn btn-info btn-block glyphicon glyphicon-chevron-down"
                data-toggle="collapse" data-target="#content"></button>
                <div class="collapse" id="content">
                <ul class="list-group">
                  <li class="list-group-item"><a href="upload.php">Upload</a></li>
                  <li class="list-group-item"><a href="canvas.php">My Canvas</a></li>
                  </ul>
                </div>
                </div>
            </div>';

     }
    ?>
    <div class="row">
      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">Image 1</div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">Image 2</div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">Image 3</div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">Image 4</div>
                  </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of one card which opens a modal -->
      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview2">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
              <div class="modal-body">
                <p>Some content goes here...</p>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview3">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
              <div class="modal-body">
                <p>Some content goes here...</p>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview4">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
              <div class="modal-body">
                <p>Some content goes here...</p>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview5">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
              <div class="modal-body">
                <p>Some content goes here...</p>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card">
          <img class="card-img-top" src="images/pattern.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Artist Name</h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview6">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Artist Name</h3>
              </div>
              <div class="modal-body">
                <p>Some content goes here...</p>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include_once 'footer.php';
  ?>
