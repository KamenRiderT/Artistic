<?php

SESSION_START();

if (isset($_POST['login'])) {

  include 'connection.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

if (empty($username) || empty($password)) {
  header("Location: ../Artistic/index.php?login=empty");
  exit();
} else {
   $sql = "SELECT * FROM artist WHERE Artist_Username='$username'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck < 1) {
     header("Location: ../Artistic/index.php?login=error1");
     exit();
   } else {
     if ($row = mysqli_fetch_assoc($result)) {

       $hashedPasswordCheck = password_verify($password, $row['Artist_Password']);
       if ($hashedPasswordCheck == false) {
         header("Location: ../Artistic/index.php?login=error2");
         exit();
       } elseif ($hashedPasswordCheck == true) {

          $_SESSION['u_id'] = $row['Artist_ID'];
          $_SESSION['f_name'] = $row['Artist_Forename'];
          $_SESSION['s_name'] = $row['Artist_Surname'];
          $_SESSION['u_email'] = $row['Artist_Email'];
          $_SESSION['u_name'] = $row['Artist_Username'];
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
