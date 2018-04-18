<?php
 include 'header.php';
?>



<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>Artist Name</h2>
           <?php
           $sql = "SELECT * FROM art WHERE Art_Name='".$_GET['title']."'";
           $result = mysqli_query($conn, $sql);
           while ($row = mysqli_fetch_assoc($result)) {
           echo "<img src='archive/".$row['Art_File']."'/>";
          }
           ?>
           <div>
             <x-rating value="0" number="5"></x-rating>
             <script src="rating.js"></script>
             <script>
               rating.addEventListener('rate', () => {
                 console.log(rating.value);
               });
             </script>
           </div>
       </div>
       <div class="col-lg-6">
         <div class="name-container">
           <h2>Piece Name</h2>
         </div>
         <div class="comment-container">Super interesting caption you should totally read....
           in great depth...
         </div>
       </div>
  </div>
  <div class="jumbotron">
  Comments go here.... Possibly... maybe...
  </div>


</div>
<?php
 include 'footer.php';
?>
