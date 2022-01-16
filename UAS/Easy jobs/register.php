<?php
session_start();
if(isset($_SESSION["Login"])) {
  header("Location: page.php");
  exit;
}

  require 'functions.php';
  if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
      echo "<script>
              alert('User berhasil ditambahkan');
            </script>";
      header("Location: login.php");
    } else {
      echo mysqli_error($conn);
    }
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link rel="stylesheet" href="style1.css" />
    <script src="https://kit.fontawesome.com/3c84978b9c.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav>
    <div class="logo">
      <h4><a>Easy Jobs</a></h4>
    </div>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
    <!-- Navbar -->
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register</span></div>
        <form action="#" method="post">
          <div class="row">
            <i class="fas fa-user-tag"></i>
            <input type="text" placeholder="Username" name="username" require />
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" require/>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" require />
          </div>
          <div class="row button">
            <input type="submit" value="Register" name="register" />
          </div>
          <div class="signup-link">Sudah punya akun? <a href="login.php">Login</a></div>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
