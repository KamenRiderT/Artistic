<?php
 include 'header.php';
 $art = null;

 if(isset($_GET['Art_Name'])) {

   $name = $_GET['Art_Name'];
   $sql = "SELECT * FROM art WHERE Art_Name like '{$name}'";
   $art = $conn->query($sql)->fetch_object();
 }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>Artist Name</h2>
           <?php
           echo "<img style='height: 100%; width: 100%;' src='archive/".$art->Art_File."'/>";
           ?>
          <?php if (isset($_SESSION['mem_id'])) {
             echo "<div class='rating'>
                    Rating:"; ?>
                    <?php foreach(range(1, 5) as $rating): ?>
                    <a href='rate.php?Art_ID=<?php echo $art->Art_ID;?>&rating=<?php echo $rating;?>'><?php  echo $rating; ?></a>
                    <?php endforeach;
                echo "</div>";
                  }
           ?>

       </div>
       <div class="col-lg-6">
         <div class="name-container">
           <h2><?php echo $art->Art_Name; ?></h2>
         </div>
         <div class="comment-container">
           <?php echo $art->Art_Caption; ?>
         </div>
       </div>
  </div>
</div>
<?php
 include 'footer.php';
?>
