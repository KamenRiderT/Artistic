<?php

if(isset($_POST['submit'])) {

include_once 'connection.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$forename = mysqli_real_escape_string($conn, $_POST['forename']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (empty($username) || empty($forename) || empty($surname) || empty($password)) {
  header("Location: ../Artistic/signup-members.php?signup=empty");
  exit();
} else {
  if (!preg_match("/^[a-zA-Z]*$/", $forename) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
    header("Location: ../Artistic/signup-members.php?signup=invalid");
    exit();
    } else {
      $sql = "SELECT * FROM memebers WHERE username='$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        header("Location: ../Artistic/signup-members.php?signup=useralreadytaken");
        exit();
      } else {
        $encrypt = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO memebers (Member_Username, Member_Forename, Member_Surname, Member_Password) VALUES ('$username', '$forename', '$surname', '$encrypt')";
        $result = mysqli_query($conn, $sql);

        header("Location: ../Artistic/signup-members.php?signup=complete");
        exit();
      }
    }
  }

} else {
  header("Location: ../Artistic/signup-members.php");
  exit();
}
