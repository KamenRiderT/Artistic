<?php
include 'header.php';
 ?>

<style>

table {
  border: 1px solid black;
  width: 100%;
}

th {
  height: 50px;
  border-bottom: 1px solid black;
}

td {
  border-bottom: 1px solid black;
  height: 50px;
}

</style>

<div class="container">
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
             <img class="card-img-top" src="images/crown.jpg" alt="Card image cap" width="230" height="230">
         </div>
         <div class="col-lg-6">
           <div class="name-container">
             <p>Artist Name</p>
           </div>
         </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
             <img class="card-img-top" src="images/second.jpg" alt="Card image cap" width="180" height="180">
         </div>
         <div class="col-lg-6">
           <div class="name-container">
             <p>Artist Name</p>
           </div>
         </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
             <img class="card-img-top" src="images/third.jpg" alt="Card image cap" width="120" height="120">
         </div>
         <div class="col-lg-6">
           <div class="name-container">
             <p>Artist Name</p>
           </div>
         </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
            <div class="rank-container">
              <p>Rank</p>
            </div>
         </div>
         <div class="col-lg-6">
           <div class="name-container">
             <p>Artist Name</p>
           </div>
         </div>
    </div>
  </div>
</div>
</div>
<?php
include 'connection.php';

$sqlretrieve = "SELECT * FROM artist ORDER BY Artist_Ranking desc";
$sqldata = mysqli_query($conn, $sqlretrieve) or die('error retrieving data');

echo "<table class='table table-dark'>";
echo "<thead>";
echo "<tr>
      <th scope='col'>RANK</th>
      <th>ARTIST NAME</th>
      </tr>";
echo "</thead>";
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
  echo "<tbody>";
  echo "<tr><td>";
  echo $row['Artist_Ranking'];
  echo "</td><td>";
  echo $row['Artist_Username'];
  echo "</td>";
  echo "</tbody>";
}
echo "</table>";
?>

<?php
include 'footer.php';
 ?>
