<?php

session_start();

if (isset($_POST['login2'])) {

  include 'connection.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

if (empty($username) || empty($password)) {
  header("Location: ../Artistic/index.php?login=empty");
  exit();
} else {
   $sql = "SELECT * FROM memebers WHERE Member_Username='$username'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck < 1) {
     header("Location: ../Artistic/index.php?login=error1");
     exit();
   } else {
     if ($row = mysqli_fetch_assoc($result)) {

       $hashedPasswordCheck = password_verify($password, $row['Member_Password']);
       if ($hashedPasswordCheck == false) {
         header("Location: ../Artistic/index.php?login=error2");
         exit();
       } elseif ($hashedPasswordCheck == true) {

          $_SESSION['mem_id'] = $row['Member_ID'];
          $_SESSION['mem_name'] = $row['Member_Forename'];
          $_SESSION['mem_name'] = $row['Member_Surname'];
          $_SESSION['mem_name'] = $row['Member_Username'];
          header("Location: ../Artistic/index.php?login=success");
          exit();
       }
     }
   }
}
} else {
  header("Location: ../Artistic/index.php?login=error");
  exit();
}
