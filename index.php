<?php
include_once 'header.php';
//top 3 Artists and their art
//Artist name query
$query1 = "SELECT * FROM artist ORDER BY Artist_Ranking desc limit 3";
$artist_high = [];
$art_high=[];
$result1 = $conn->query($query1);
$i =0;
while($db_artist = $result1->fetch_object()) {

  $artist_high[$i] = $db_artist;
  $query2 = "SELECT * FROM art WHERE Artist_ID= {$artist_high[$i]->Artist_ID} ORDER BY Art_Rank desc  limit 4";
  $art_high[$i]=[];
  $result2 = $conn->query($query2);

  while($db_art = $result2->fetch_object()) {
    $art_high[$i][] = $db_art;
  }
  $i++;
}


//Artist images query

//bottom 3 Atrists and their art
$query1 = "SELECT * FROM artist ORDER BY Artist_Ranking asc limit 3";
$artist_low = [];
$art_low=[];
$result1 = $conn->query($query1);
$ib =3;
while($db_artist = $result1->fetch_object()) {

  $artist_low[$ib] = $db_artist;
  $query2 = "SELECT * FROM art WHERE Artist_ID= {$artist_low[$ib]->Artist_ID} ORDER BY Art_Rank desc  limit 4";
  $art_low[$ib]=[];
  $result2 = $conn->query($query2);

  while($db_art = $result2->fetch_object()) {
    $art_low[$ib][] = $db_art;
  }
  $ib++;
}
// die(print_r($art_low));
 ?>

  <!-- One card containing a modal for each of the 6 Artists featured that week-->
  <div class="container text-center">
    <h2>Current Rankings</h2>
    <?php
     if (isset($_SESSION['u_id'])) {
       echo "You are logged in";
     }
     if (isset($_SESSION['mem_id'])) {
       echo "You are logged in.";
     }
    ?>
    <div class="row">
      <div class="col-sm-4">

        <div class="card">
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[0][0]->Art_File."'/>";
          ?>
          <!--img class="card-img-top" src="images/pattern.jpg" alt="Card image cap"-->
          <div class="card-block">
              <h4 class='card-title'><?php echo $artist_high[0]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview">Explore</button>
          </div>
        </div>
        <div class="modal fade" id="preview">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_high[0]->Artist_Username; ?></h3>
              </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">
                      <?php
                      echo "<img class='img-thumbnail' src='archive/".$art_high[0][0]->Art_File."'/>";
                      ?>
                    </div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">
                      <?php
                      if(isset($art_high[0][1])){
                        echo "<img class='img-thumbnail' src='archive/".$art_high[0][1]->Art_File."'/>";
                      } else {
                        echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                      }
                      ?>
                    </div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">
                      <?php
                      if(isset($art_high[0][2])){
                        echo "<img class='img-thumbnail' src='archive/".$art_high[0][1]->Art_File."'/>";
                      } else {
                        echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                      }
                      ?>
                    </div>
                  </div>
                  <div class="panel panel-default col-sm-6">
                    <div class="panel-body">
                      <?php
                      if(isset($art_high[0][3])){
                        echo "<img class='img-thumbnail' src='archive/".$art_high[0][1]->Art_File."'/>";
                      } else {
                        echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                      }
                      ?>
                    </div>
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
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[1][0]->Art_File."'/>";
          ?>
          <div class="card-block">
            <h4 class="card-title"><?php echo $artist_high[1]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview2">Explore
      </button>
          </div>
        </div>
        <!--modal 2 -->
        <div class="modal fade" id="preview2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_high[1]->Artist_Username; ?></h3>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  echo "<img class='img-thumbnail' src='archive/".$art_high[1][0]->Art_File."'/>";
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[1][1])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[1][1]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[1][2])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[1][2]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[1][3])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[1][3]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" name="button" class="btn btn-outline-info" data-dismiss="modal">X</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- card 3 -->
      <div class="col-sm-4">

        <div class="card">
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[2][0]->Art_File."'/>";
          ?>
          <div class="card-block">
            <h4><?php echo $artist_high[2]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview3">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_high[2]->Artist_Username; ?></h3>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  echo "<img class='img-thumbnail' src='archive/".$art_high[2][0]->Art_File."'/>";
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[2][1])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[2][1]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[2][2])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[2][2]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_high[2][3])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[2][3]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
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
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[3][0]->Art_File."'/>";
          ?>
          <div class="card-block">
            <h4><?php echo $artist_low[3]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview4">Explore
      </button>
          </div>
          <!-- artist lowest ranks -->
        </div>
        <div class="modal fade" id="preview4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_low[3]->Artist_Username; ?></h3>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  echo "<img class='img-thumbnail' src='archive/".$art_low[3][0]->Art_File."'/>";
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[3][1])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[3][1]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[3][2])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[3][2]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[3][3])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[3][3]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
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
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[4][0]->Art_File."'/>";
          ?>
          <div class="card-block">
            <h4><?php echo $artist_low[4]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview5">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_low[4]->Artist_Username; ?></h3>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  echo "<img class='img-thumbnail' src='archive/".$art_low[4][0]->Art_File."'/>";
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[4][1])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[4][1]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[4][2])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[4][2]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[4][3])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[4][3]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
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
          <?php
          echo "<img class='img-thumbnail' src='archive/".$art_high[5][0]->Art_File."'/>";
          ?>
          <div class="card-block">
            <h4><?php echo $artist_low[5]->Artist_Username; ?></h4>
            <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#preview6">Explore
      </button>
          </div>
        </div>
        <div class="modal fade" id="preview6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><?php echo $artist_low[5]->Artist_Username; ?></h3>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  echo "<img class='img-thumbnail' src='archive/".$art_low[5][0]->Art_File."'/>";
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[5][1])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[5][1]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[5][2])){
                    echo "<img class='img-thumbnail' src='archive/".$art_low[5][2]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
              </div>
              <div class="panel panel-default col-sm-6">
                <div class="panel-body">
                  <?php
                  if(isset($art_low[5][3])){
                    echo "<img class='img-thumbnail' src='archive/".$art_high[5][3]->Art_File."'/>";
                  } else {
                    echo " <img class=\"card-img-top\" src=\"images/pattern.jpg\" alt=\"Card image cap\">";
                  }
                  ?>
                </div>
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
