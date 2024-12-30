<!DOCTYPE html>
<html lang="en">

<?php 
session_start(); // Memulai sesi
include "head.php"; 
?>

<?php 
// Periksa apakah pengguna sudah login?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  include "navbar-user.php"; 
} else {
  include "navbar.php"; 
}
?>

<body id="page-top">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <head>
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      </head>

      <body>
        <div id="content">
          <div style="text-align: center">
            <h2 style="color:#57ae6c" class="h3 mb-2">BUAT PENGADUAN</h2>
          </div>
        </div>
        <br>
        <div class="container">
          <form id="aduanForm" action="proses-aduan.php" method="post" enctype="multipart/form-data">
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="tanggal_aduan">Tanggal:</label>
              </div>
              <div class="col-md-9">
                <input type="date" id="tanggal_aduan" name="tanggal_aduan" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="lokasi_aduan">Lokasi:</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="lokasi_aduan" name="lokasi_aduan" class="form-control" placeholder="Lokasi" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="isi_aduan">Isi Aduan:</label>
              </div>
              <div class="col-md-9">
                <textarea id="isi_aduan" name="isi_aduan" class="form-control" placeholder="Aduan" style="height:150px" required></textarea>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="bukti_foto">Bukti Foto:</label>
              </div>
              <div class="col-md-9">
                <input type="file" id="bukti_foto" name="bukti_foto" class="form-control-file" accept="image/*" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-2">
                <input type="submit" value="Kirim" class="btn btn-success">
              </div>
            </div>
          </form>
        </div>
      </body>
      </div>

      <!-- Footer -->
      <?php include "footer.php"; ?>
</body>

</html>
