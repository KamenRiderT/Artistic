<?php
  include_once 'header.php';
?>
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
<?php
  include_once 'footer.php';
?>
