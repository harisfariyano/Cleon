<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="../assets/dist/img/cleon_icon.png" rel="apple-touch-icon">
  <link href="../assets/dist/img/cleon_icon.png" rel="icon">
  <title>Cleon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-icons/bootstrap-icons.css">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="APindex.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="bi bi-gear-wide-connected"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Pengaturan</span>
            <div class="dropdown-divider"></div>
            <a href="../index.php" class="dropdown-item">
              <i class="fas fa-home mr-2"></i>cleon web
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" id="logoutButton" class="bi bi-power dropdown-item dropdown-footer"> Keluar</a>
            <script>
              // Event listener untuk tombol "Log Out"
              document.getElementById('logoutButton').addEventListener('click', function (event) {
                event.preventDefault(); // Menghentikan perilaku default dari link

                // Menampilkan konfirmasi SweetAlert2
                Swal.fire({
                  title: 'Konfirmasi Keluar',
                  text: 'Apakah Anda yakin ingin keluar?',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Ya, saya yakin'
                }).then((result) => {
                  if (result.isConfirmed) {
                    // Lakukan log out jika pengguna menekan "OK" pada SweetAlert2
                    window.location.href = 'Logout.php'; // Ganti dengan path logout yang benar
                  }
                });
              });
            </script>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="APindex.php" class="brand-link">
        <img src="../assets/dist/img/cleon_icon.png" alt="AdminLTE Logo" class="brand-image img elevation-3"
          style="opacity: .8">
        <span>CLEON</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">ADMIN</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="APindex.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboards
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="header.php" class="nav-link">
                    <i class="bi bi-border-top nav-icon"></i>
                    <p>header</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="home_page.php" class="nav-link">
                    <i class="bi bi-border-outer nav-icon"></i>
                    <p>home Page</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="filter_button.php" class="nav-link">
                <i class="bi bi-funnel nav-icon"></i>
                <p>filter button</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="paket.php" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Paket
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  My Cleon
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="kontak.php" class="nav-link">
                    <i class="bi bi-telephone-fill nav-icon"></i>
                    <p>Kontak <span class="right badge badge-danger">New</span></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="about_us.php" class="nav-link">
                    <i class="bi bi-file-person-fill nav-icon"></i>
                    <p>About Us</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="faq.php" class="nav-link">
                    <i class="bi bi-patch-question-fill nav-icon"></i>
                    <p>FAQ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tos.php" class="nav-link">
                    <i class="bi bi-clipboard2-check-fill nav-icon"></i>
                    <p>TOS</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>