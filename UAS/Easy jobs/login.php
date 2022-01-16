<?php 
session_start();

if(isset($_SESSION["Login"])) {
  header("Location: page.php");
}

require 'functions.php';

if(isset($_POST["Login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  //cek username
  if(mysqli_num_rows($result) === 1) {
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {
      //set session
      $_SESSION["Login"] = true;
      header("Location: page.php");
      exit;
    }
  }

  $error = true;
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <div class="title"><span>Login</span></div>
        <?php if(isset($error)) : ?>
          <p style="color: red; font-style: italic;">Username / Password salah</p>
        <?php endif; ?>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email = kukukiki281@gmail.com" name="email" require/>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password = 123" name="password" require/>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" name="Login">
          </div>
          <div class="signup-link">Belum punya akun? <a href="register.php">Signup Sekarang</a></div>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
