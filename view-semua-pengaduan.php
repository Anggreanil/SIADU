<!DOCTYPE html>
<html lang="en">

<?php 
session_start(); // Memulai sesi
include "head.php"; 
?>

<?php 
// Periksa apakah pengguna sudah login
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  include "navbar-user.php"; 
} else {
  include "navbar.php"; 
}
?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/view-pengaduan.css">

<body id="page-top">

<div id="content">
  <br>
  <div style="text-align: center">
    <h2 style="color: #57ae6c" class="h3 mb-2">ADUAN MASUK</h2>
    <br>
  </div>
</div>

<!-- Main Content -->
<div style="background-color: white;" class="container">
  <div class="row">
    <?php
    include("koneksi.php");
    
    // Ambil data pengaduan
    $sql = "SELECT id_pelapor, nama_pelapor, tanggal_aduan, lokasi_aduan, isi_aduan FROM pengaduan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id_pelapor = $row['id_pelapor'];
        $nama = $row['nama_pelapor'];
        $tanggal_aduan = $row['tanggal_aduan'];
        $lokasi_aduan = $row['lokasi_aduan'];
        $isi_aduan = $row['isi_aduan'];

        if (strlen($isi_aduan) > 50) {
          $isi_aduan = substr($isi_aduan, 0, 25) . "...";
        }
    ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <small class="text-muted"><i class="fas fa-user-circle icon"></i> <?php echo $nama; ?></small>
              <br>
              <small class="text-muted"><i class="fas fa-exclamation-triangle"></i> <?php echo $isi_aduan; ?></small>
              <span>
                <small class="text-muted"><a href="baca-aduan.php?id_pelapor=<?php echo $id_pelapor; ?>">Baca Selengkapnya</a></small>
              </span>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-6">
                  <small class="text-muted"><i class="fas fa-calendar-alt"></i> <?php echo $tanggal_aduan; ?></small>
                </div>
                <div class="col-md-6 text-right">
                  <small class="text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo $lokasi_aduan; ?></small>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }
    $conn->close();
    ?>
  </div>

</div>
<!-- End of Container -->

<br>

<!-- Footer -->
<?php include "footer.php"; ?>

</body>

</html>
