<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\sb-admin-2.css">
  <style>
    /* Tambahkan gaya CSS untuk menu navbar yang aktif */
    .navbar-nav .dropdown-item.active {
        background-color: transparent; /* Warna latar belakang untuk menu aktif */
        color: #28a745; /* Warna teks untuk menu aktif */
        border-bottom: 2px solid #28a745; /* Garis bawah untuk menu aktif */
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" style="margin-top: 0px; margin-left: 25px;" href="beranda.php">
        <img src="png/logo-jombang.png" alt="Logo" style="height: 50px;">
        <img src="png/logo-app-siadu.png" alt="Logo" style="height: 50px;">
    </a>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" id="navbarMenu">
        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

        <!-- Nav Item - User Information -->
        <a class="dropdown-item" href="beranda.php">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Beranda</span>
        </a>

        <a class="dropdown-item" href="panduan.php">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Panduan</span>
        </a>

        <a class="dropdown-item" href="aduan.php">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengaduan</span>
        </a>

        <a class="dropdown-item" href="pengajuan.php">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengajuan</span>
        </a>

        <a class="dropdown-item" href="saran.php">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Saran</span>
        </a>

        <div class="dropdown">
            <a class="mr-2 d-none d-lg-inline text-gray-600 small">User</a>
            <div class="dropdown-content">
                <a href="profil.php">Edit Profil</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a>
            </div>
        </div>

    </ul>
</nav>

<!-- elemen sidebar -->
<div id="sidebar" class="d-md-none" style="display: none;">
  <ul class="list-group">
    <li class="list-group-item"><a href="beranda.php">Beranda</a></li>
    <li class="list-group-item"><a href="panduan.php">Panduan</a></li>
    <li class="list-group-item"><a href="aduan.php">Pengaduan</a></li>
    <li class="list-group-item"><a href="pengajuan.php">Pengajuan</a></li>
    <li class="list-group-item"><a href="saran.php">Saran</a></li>
    <li class="list-group-item sidebar-dropdown">
        <a href="#">User</a>
        <ul class="sidebar-dropdown-content list-group">
            <li class="list-group-item"><a href="profil.php">Edit Profil</a></li>
            <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a></li>
        </ul>
    </li>
  </ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Ambil URL halaman saat ini
  var currentUrl = window.location.href;

  // Cari elemen menu yang sesuai dengan URL halaman saat ini
  var menuItems = document.querySelectorAll('#navbarMenu a');

  menuItems.forEach(function(item) {
      // Jika URL halaman saat ini cocok dengan href dari elemen menu, tambahkan kelas 'active'
      if (item.href === currentUrl) {
          item.classList.add('active');
      }
  });

  // Fungsionalitas untuk toggle sidebar
  document.getElementById('sidebarToggleTop').addEventListener('click', function() {
      var sidebar = document.getElementById('sidebar');
      if (sidebar.style.display === 'none' || sidebar.style.display === '') {
          sidebar.style.display = 'block';
      } else {
          sidebar.style.display = 'none';
      }
  });
</script>

</body>
</html>
