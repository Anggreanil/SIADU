<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start(); // Start the session
    include "head.php"; 
    ?>

    <link rel="stylesheet" href="css/user.css">
    <!-- Add Bootstrap CSS if not already included -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body id="page-top">
    <!-- Navbar -->
    <?php 
    // Check if user is logged in
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        include "navbar-user.php"; 
    } else {
        include "navbar.php"; 
    }
    ?>
    <!-- End of Navbar -->

    <!-- Main Content -->

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
               <!-- Content -->
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

            <!-- Include Pengaduan View -->
            <?php include "view-pengaduan.php"; ?>
        </div>

        <?php include "footer-info.php"; ?>

        <!-- JavaScript -->
        <!-- Add jQuery and Bootstrap JS if not already included -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            // JavaScript for existing slideshow
            var slideIndex = 0;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("slide-container");
                if (n >= x.length) { slideIndex = 0 }
                if (n < 0) { slideIndex = x.length - 1 }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = slideIndex; i < slideIndex + 3; i++) {
                    x[i % x.length].style.display = "inline-block";
                }
            }
        </script>
    </div>
</body>
</html>
