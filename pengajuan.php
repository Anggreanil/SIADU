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
<style>
    .custom-btn {
        height: 100px; /* Atur tinggi sesuai kebutuhan */
    }

    .custom-btn i {
        font-size: 1em; /* Atur ukuran font ikon */
    }
</style>
<head>
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      </head>

<body id="page-top">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <div style="text-align: center">
        <h2 style="color:#57ae6c" class="h3 mb-2">KATEGORI PENGAJUAN</h2>
      </div>

      <div class="row mt-5">
        <div class="col-md-3 mb-4">
          <div class="text-center">
            <a href="videotron.php" class="btn btn-light btn-lg btn-block custom-btn">
              <i style="color: #57ae6c" class="fas fa-video fa-2x mb-2"></i>
              <h4 class="h5 mb-0">Videotron</h4>
            </a>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="text-center">
            <a href="pembuatan-flyer.php" class="btn btn-light btn-lg btn-block custom-btn">
              <i style="color: #57ae6c" class="far fa-file-alt fa-2x mb-2"></i>
              <h4 class="h5 mb-0">Buat Flyer</h4>
            </a>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="text-center">
            <a href="penayangan-flyer.php" class="btn btn-light btn-lg btn-block custom-btn">
              <i style="color: #57ae6c" class="far fa-eye fa-2x mb-2"></i>
              <h4 class="h5 mb-0">Flyer</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- End of Row -->

    </div>
    <!-- End of Container Fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <?php include "footer.php"; ?>

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      var dataTable = $('#lookup').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
          url: "ajax-data-user.php",
          type: "post",
          error: function() { // error handling
            $(".lookup-error").html("");
            $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
            $("#lookup_processing").css("display", "none");
          }
        }
      });
    });
  </script>

</body>

</html>
