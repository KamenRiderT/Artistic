<?php
 include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">

<form action="searchB.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" name="search" placeholder="Search..."/>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-info" name="search_for">Search</button>
  </div>
</form>
<h2>Search Results</h2>
</div>
</div>
</div>
<div class="image-container">
<?php
  $sql = "SELECT * FROM art";
  $result = mysqli_query($conn, $sql);
  $queryResults = mysqli_num_rows($result);

  if ($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
          echo "<div id='img_div'>";
          echo "<h3>".$row['Art_Name']."</h3>";
          echo "<img src='archive/".$row['Art_File']."' >";
          echo "</div>";
    }
  }
 ?>
</div>
<?php
 include 'footer.php';
?>
