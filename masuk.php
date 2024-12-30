<?php
session_start(); // Memulai sesi
include "head.php"; 
?>

<body id="page-top">

  <!-- Topbar -->
  <?php include "navbar.php"; ?>
  <!-- End of Topbar -->

  <head>
    <link rel="stylesheet" href="css/user/daftar.css">
  </head>

  <!-- Begin Page Content -->
  <div id="content">
                <div style="text-align: center">
                    <h2 style="color:#57ae6c" class="h3 mb-2">MASUK AKUN</h2>
                </div>
            </div>
            <br>
  
  <div class="container">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <div class="image-wrapper mb-3">
              <img width="220px" src="png/logo-log.png" alt="Profil">
            </div>
          </div>
        </div>
        <form method="POST" action="proses-masuk.php" class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label for="email_user" class="custom-labels">Email:</label>
              <input name="email_user" type="email" id="email_user" class="form-control" required placeholder="Email">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="password_user" class="custom-labels">Kata Sandi:</label>
              <input name="password_user" type="password" id="password_user" class="form-control" required placeholder="Kata Sandi">
            </div>
          </div>
          <div class="row mt-3">
            <input type="submit" value="Masuk" class="btn btn-info">
          </div>
          <div class="row mt-3">
            <div class="col-md-12 text-center">
              <span>Belum punya akun? </span><a href="daftar.php">Daftar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>