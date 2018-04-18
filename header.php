<?php
SESSION_START();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="rating.css">
  <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #096280;
      color: #94def7;
      padding: 1% 0;
      font-size: 1.2em;
      border: 0;
    }

    .navbar-left {
      float: left;
      min-height: 25px;
      padding: 0 15px 5px;
    }

    .navbar-inverse .navbar-nav li a {
      color: #94def7;
    }

    .navbar-inverse .navbar-nav .active a,
    .navbar-inverse .navbar-nav .active a:focus,
    .navbar-inverse .navbar-nav .active a:hover {
      color: #94def7;
      background-color: #096280;
    }

    footer{
      width: 100%;
      background-color: #096280;
      padding: 3%;
      color: #94def7;
    }


  </style>
  <title>Home</title>
</head>

<body>
  <header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="index.php" class="navbar-left"><img src="images/logo.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="ranking.php">Ranking</a></li>
          <li><a href="search.php">Search</a></li>
          <?php
              if (isset($_SESSION['u_id'])) {
                echo '<li><a href="logout_log.php" name="logout">Log-out</a></li>';
              } else {
                echo '<li><a href="login.php">Login</a></li>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="drop-down">Sign-up</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="signup.php">Artist</a>
                        <a class="dropdown-item" href="#">Member</a>
                      </div>
                      </li>';
              }
           ?>
          <!--li><a href="#" class="btn"><img src="images/buttonrank.png"></a></li-->
          <!-- Button as image does appear to work just need to create images at correct size -->
        </ul>

      </div>
    </div>
  </nav>
</header>
