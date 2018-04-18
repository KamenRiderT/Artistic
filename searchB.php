<?php
 include 'header.php';
 ?>

<h1>Search Result</h1>

<div class="art-container">
<?php
if (isset($_POST['search_for'])) {
  $search = mysqli_real_escape_string($conn, $_POST['search']);
  $sql = "SELECT * FROM art WHERE Art_Name LIKE '%$search%' OR Art_Caption LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

echo "There are ".$queryResults." results found.";

if ($queryResults > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<a href='view.php?title=".$row['Art_Name']."'><div id='img_div'>";
    echo "<h3>".$row['Art_Name']."</h3>";
    echo "<img src='archive/".$row['Art_File']."' >";
    echo "</div></a>";
  }
} else {
  echo "No results found...";
}
}
 ?>
</div>
 <?php
include 'footer.php';
  ?>
