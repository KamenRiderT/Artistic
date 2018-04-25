<?php
session_start();
require_once 'connection.php';

if(isset($_GET['Art_ID'], $_GET['rating'])) {

  $art = (int)$_GET['Art_ID'];
  $rating = (int)$_GET['rating'];
  $member = (int)$_SESSION['mem_id'];
  
  if(in_array($rating, [1, 2, 3, 4, 5])) {
    $sql = "SELECT Art_ID, Art_Name, Artist_ID FROM art WHERE Art_ID = {$art}";
    $result = $conn->query($sql);

    $available = $result->num_rows ? true : false;
    $art = $result->fetch_object();
    if($available) {
      $sql = "INSERT INTO art_member (Art_ID, Member_ID, Art_Rank) VALUES ({$art->Art_ID}, {$member}, {$rating})";
      $conn->query($sql);
      $sql = "UPDATE art SET Art_Rank = (SELECT AVG(Art_Rank) from art_member WHERE Art_ID = {$art->Art_ID}) where Art_ID = {$art->Art_ID}";
      $conn->query($sql);
      $sql = "UPDATE artist SET Artist_Ranking = (SELECT AVG(Art_Rank) from art WHERE Artist_ID = {$art->Artist_ID}) where Artist_ID = {$art->Artist_ID}";
      $conn->query($sql);
    }
  }
  header('Location: ../Artistic/view.php?Art_Name=' . $art->Art_Name);
}

 ?>
