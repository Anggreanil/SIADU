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
            <h2 style="color:#57ae6c" class="h3 mb-2">PERMOHONAN VIDEOTRON</h2>
          </div>
        </div>
        <br>
        <div class="container">
          <form id="videotronForm" action="proses-videotron.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-3">
                <label for="tanggal_ajuan">Tanggal:</label>
              </div>
              <div class="col-md-9">
                <input type="date" id="tanggal_ajuan" name="tanggal_ajuan" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="surat_permohonan">Surat Permohonan (PDF):</label>
              </div>
              <div class="col-md-9">
                <input type="file" id="surat_permohonan" name="surat_permohonan" class="form-control-file" accept="application/pdf" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="dokumen_iklan">Video (Max. berdurasi 3 menit):</label>
              </div>
              <div class="col-md-9">
                <input type="file" id="dokumen_iklan" name="dokumen_iklan" class="form-control-file" accept="video/mp4" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <label for="deskripsi_iklan">Deskripsi Video:</label>
              </div>
              <div class="col-md-9">
                <textarea id="deskripsi_iklan" name="deskripsi_iklan" class="form-control" placeholder="Deskripsi Video" style="height:120px" required></textarea>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-3">
                <input type="submit" value="Kirim" class="btn btn-success">
              </div>
            </div>
          </form>
        </div>

      </body>

      <!-- Footer -->
      <?php include "footer.php"; ?>

    </div>

  </div>

</body>

</html>
