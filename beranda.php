<!DOCTYPE html>
<html lang="en">
  
<?php 
session_start(); // Memulai sesi
include "head.php"; 

// Periksa apakah pengguna sudah login?
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
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
          <!-- Carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="png/2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="png/1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="png/2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- End of Carousel -->

            <br>
            <br>
      
         
    <div style="text-align: center;">
        <h2 style="color:#57ae6c" class="h3 mb-2">BUAT PENGADUAN ATAU PENGAJUAN</h2>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 mb-4">
            <div class="text-center">
                <a href="aduan.php" class="btn btn-light btn-lg btn-block custom-btn">
                    <i style="color: #57ae6c" class="fas fa-exclamation-triangle fa-2x mb-2"></i>
                    <h4 class="h5 mb-0">Pengaduan</h4>
                </a>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="text-center">
                <a href="pengajuan.php" class="btn btn-light btn-lg btn-block custom-btn">
                    <i style="color: #57ae6c" class="far fa-eye fa-2x mb-2"></i>
                    <h4 class="h5 mb-0">Pengajuan</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<style>
    .custom-btn {
        height: 100px; /* Atur tinggi sesuai kebutuhan */
    }

    .custom-btn i {
        font-size: 1em; /* Atur ukuran font ikon */
    }
</style>

            <div id="content">
                <div style="text-align: center">
                    <h2 style="color: #57ae6c" class="h3 mb-2 ">CEK STATUS</h2>
                </div>
            </div>
          

          <div class="row mt-5">
            <div class="col-md-3 mb-4">
              <div class="text-center">
                <a href="aduan-saya.php" class="btn btn-light btn-lg btn-block custom-btn">
                  <i class="fas fa-exclamation-circle fa-2x mb-2" style="color: #57ae6c"></i>
                  <h4 class="h5 mb-0">Pengaduan</h4>
                </a>
              </div>
            </div>

            <div class="col-md-3 mb-4">
              <div class="text-center">
                <a href="ajuan-videotron-saya.php" class="btn btn-light btn-lg btn-block custom-btn">
                  <i class="fas fa-tv fa-2x mb-2" style="color: #57ae6c"></i>
                  <h4 class="h5 mb-0">Videotron</h4>
                </a>
              </div>
            </div>

            <div class="col-md-3 mb-4">
              <div class="text-center">
                <a href="ajuan-flyer-saya.php" class="btn btn-light btn-lg btn-block custom-btn">
                  <i class="fas fa-file fa-2x mb-2" style="color: #57ae6c"></i>
                  <h4 class="h5 mb-0">Flyer</h4>
                </a>
              </div>
      
            </div>

          </div>
          
          <?php include "view-pengaduan.php"; ?>
        </div>
      </body>
    </div>
    
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php include "footer.php"; ?>
    <?php include "footer-info.php"; ?>
    
    <!-- jQuery DataTables initialization script -->
    <script>
      $(document).ready(function() {
        var dataTable = $('#lookup').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax":{
            url :"ajax-data-user.php", 
            type: "post", 
            error: function(){  // error handling
              $(".lookup-error").html("");
              $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#lookup_processing").css("display","none");
            }
          }
        });
      });
    </script>
  </div>
</body>
</html>
