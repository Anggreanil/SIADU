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

      <div style="text-align: center">
        <h2 style="color:#57ae6c" class="h3 mb-2">KIRIM SARAN</h2>
      </div>
      <br>

      <div class="container">
        <form id="saranForm" action="proses-saran.php" method="post">
          <div class="row">
            <div class="col-md-3">
              <label for="nama_lengkap">Nama Lengkap:</label>
            </div>
            <div class="col-md-9">
              <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-3">
              <label for="isi_saran">Isi Saran:</label>
            </div>
            <div class="col-md-9">
              <textarea id="isi_saran" name="isi_saran" class="form-control" placeholder="Saran" style="height:200px"></textarea>
            </div>
          </div>
          <div class="row mt-3 justify-content-center">
            <div class="col-md-3 text-center">
              <input type="submit" class="btn btn-success" style="width: 150px;" value="Kirim">
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- End of Page Content -->

    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script>
      $(document).ready(function() {
        var dataTable = $('#lookup').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": {
            url: "ajax-data-user.php",
            type: "post",
            error: function() {
              $(".lookup-error").html("");
              $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#lookup_processing").css("display", "none");
            }
          }
        });
      });
    </script>

  </div>
  <!-- End of Main Content -->

</body>

</html>
