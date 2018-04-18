<?php

if(isset($_POST['submit'])) {

include_once 'connection.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$forename = mysqli_real_escape_string($conn, $_POST['forename']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

if (empty($username) || empty($forename) || empty($surname) || empty($password) || empty($email)) {
  header("Location: ../Artistic/signup.php?signup=empty");
  exit();
} else {
  if (!preg_match("/^[a-zA-Z]*$/", $forename) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
    header("Location: ../Artistic/signup.php?signup=invalid");
    exit();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../Artistic/signup.php?signup=invalid_email");
      exit();
    } else {
      $sql = "SELECT * FROM artist WHERE username='$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        header("Location: ../Artistic/signup.php?signup=useralreadytaken");
        exit();
      } else {
        $encrypt = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO artist (Artist_Username, Artist_Forename, Artist_Surname, Artist_Password, Artist_Email) VALUES ('$username', '$forename', '$surname', '$encrypt', '$email')";
        $result = mysqli_query($conn, $sql);

        header("Location: ../Artistic/signup.php?signup=complete");
        exit();
      }
    }
  }
}

} else {
  header("Location: ../Artistic/signup.php");
  exit();
}
