<?php 
session_start();
if(!isset($_SESSION["Login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$result = mysqli_query($conn, "SELECT * FROM user");

$row = mysqli_fetch_assoc($result);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Easy Jobs</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="page.css" />
  </head>
  <body>
    <!-- Navbar -->
    <div class="header">
      <div class="header_left">
        <h1>Easy Jobs</h1>
      </div>
      <div class="header_right">
        <div class="pilihan">
          <a href="#">
            <span class="material-icons"> chat </span>
          </a>
          <a href="#">
            <h4>Chat</h4>
          </a>
        </div>
        <div class="pilihan">
          <a href="#">
            <span class="material-icons"> notifications </span>
          </a>
          <a href="#">
            <h4>Notifikasi</h4>
          </a>
        </div>
        <div class="akun">
          <a href="#">
            <span class="material-icons"> account_circle </span>
          </a>
          <a href="#">
            <h4><?= $row["username"]; ?></h4>
          </a>
        </div>
      </div>
    </div>
    <!-- Navbar -->

    <!-- Konten -->
    <div class="main">
      <div class="kiri">
        <div class="kiri_atas">
          <span style="color: red" class="material-icons"> account_circle </span>
          <h2><?= $row["username"] ?> </h2>
          <h4>Seorang Programmer</h4>
        </div>
        <div class="kiri_bawah">
          <div class="tambahan">
            <a href="#">
            <span class="material-icons"> settings </span>
            </a>
            <a href="#">
            <h4>Pengaturan</h4>
            </a>
          </div>
          <div class="tambahan">
            <a href="#">
            <span class="material-icons"> event_note </span>
            </a>
            <a href="#">
            <h4>Jadwal</h4>
            </a>
          </div>
          <div class="tambahan">
            <a href="#">
            <span class="material-icons"> turned_in </span>
            </a>
            <a href="#">
            <h4>Yang disimpan</h4>
            </a>
          </div>
          <div class="tambahan">
            <a href="logout.php">
              <span class="material-icons"> logout </span>
            </a>
            <a href="logout.php">
              <h4>logout</h4>
            </a>
          </div>
          <div class="tambahan1">
            <h4>Yang lainnya</h4>
            <span class="material-icons"> arrow_forward </span>
          </div>
        </div>
      </div>
      <!-- Upload -->
      <div class="feed">
        <div class="feed_inputContainer">
          <div class="feed_input">
            <span style="color: red" class="material-icons"> account_circle </span>
            <form>
              <input type="text" placeholder="Tulis Postingan..."></input>
            </form>
          </div>
          <div class="feed_options">
            <div class="option">
              <span class="material-icons"> insert_photo </span>
              <h4>Foto</h4>
            </div>
            <div class="option">
              <span class="material-icons"> videocam </span>
              <h4>Video</h4>
            </div>
          </div>
        </div>
        <!-- Post -->
        <div class="post_title">
          <h1>Postingan</h1>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <div class="post">
          <div class="post_header">
            <span style="color: red" class="material-icons"> account_circle </span>
            <div class="post_info">
              <h2>Nama</h2>
              <p>Deskripsi</p>
            </div>
          </div>
          <div class="postingan">
            <p>Pesannya...</p>
          </div>
        </div>
        <!-- Post -->
      </div>
      <!-- Upload -->
      <!-- Pencarian -->
      <div class="kanan">
        <div class="container">
          <div class="pencarian">
            <span class="material-icons"> search </span>
            <input type="text">
          </div>
          <div class="saran">
            <div class="saran_title">
              <h3>Saran Mengikuti</h3>
            </div>
            <div class="saran_profile">
              <span style="color: #F6A7A7" class="material-icons"> account_circle </span>
              <div class="saran_nama">
                <h4>Nama</h4>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="saran_profile">
              <span style="color: #F6A7A7" class="material-icons"> account_circle </span>
              <div class="saran_nama">
                <h4>Nama</h4>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="saran_profile">
              <span style="color: #F6A7A7" class="material-icons"> account_circle </span>
              <div class="saran_nama">
                <h4>Nama</h4>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="saran_profile">
              <span style="color: #F6A7A7" class="material-icons"> account_circle </span>
              <div class="saran_nama">
                <h4>Nama</h4>
                <p>Deskripsi</p>
              </div>
            </div>
            <div class="lain">
              <h4>Lain lainnya</h4>
              <span class="material-icons"> arrow_forward </span>
            </div>
          </div>
        </div>
      </div>
      <!-- Pencarian -->
    </div>
    <!-- Konten -->
  </body>
</html>
