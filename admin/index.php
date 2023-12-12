<?php
include '../config/config.php';

$query = mysqli_query($conn, "SELECT * FROM apuser");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cleon</title>
  <link href="../assets/dist/img/cleon_icon.png" rel="apple-touch-icon">
  <link href="../assets/dist/img/cleon_icon.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-icons/bootstrap-icons.css">
  <!-- Tautan skrip SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition login-page" style="background-image: url('../assets/dist/img/3.png'); background-size: cover;">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-16">
        <div class="login-box">
          <div class="card card-outline card-primary mx-auto" style="max-width: 350px;">
            <div class="card-header text-center">
              <a href="../index.php">
              <div class="login-logo">
              <img src="../assets/dist/img/cleon.png" alt="cleon" class="img-fluid" style="width: 180px;">
              </div>
              </a>
              <div class="card-body">
                <p class="login-box-msg">Login terlebih dahulu admin </p>
                <form action="../backend/loginA/loginproses.php" method="post" id="loginForm">
                  <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                   <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- REQUIRED SCRIPTS -->

<!-- Skrip JavaScript untuk menangani login dan menampilkan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir default

            // Mengambil nilai dari input username dan password
            const username = document.querySelector('#loginForm input[name="username"]').value;
            const password = document.querySelector('#loginForm input[name="password"]').value;

            // Membuat objek FormData untuk mengirimkan data
            const formData = new FormData();
            formData.append('username', username);
            formData.append('password', password);

            // Mengirim data ke loginproses.php menggunakan fetch API
            fetch('../backend/loginA/loginproses.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.hasOwnProperty('status') && data.hasOwnProperty('message')) {
                        const status = data.status;
                        const message = data.message;

                        if (status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Hallo admin',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location.href ='APindex.php'; // Redirect ke halaman setelah login berhasil
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: message
                            });
                        }
                    } else {
                        throw new Error('Invalid server response format');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan. Silakan coba lagi.'
                    });
                });
        });
    </script>

</body>
</html>
