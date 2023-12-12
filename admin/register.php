<?php
include('../config/config.php');

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    
    if (!empty($fullname) && !empty($email) && !empty($username) && !empty($password) && !empty($confirm)) {
        
        if ($password === $confirm) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Menggunakan password_hash() untuk hash password
            
            $sql_check_username = mysqli_query($conn, "SELECT * FROM apuser WHERE username='$username'");
            $num_row = mysqli_num_rows($sql_check_username);

            if ($num_row == 0) {
                $sql_insert = mysqli_query($conn, "INSERT INTO apuser (nama, email, username, password) VALUES ('$fullname', '$email', '$username', '$hashed_password') ");
                
                if ($sql_insert) {
                    echo "
                    <script>
                    alert('Pendaftaran Berhasil');
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                    alert('Gagal menyimpan data ke database');
                    </script>
                    ";
                }
            } else {
                echo "
                <script>
                alert('Maaf, username sudah terdaftar sebelumnya');
                </script>
                ";
            }
        } else {
            echo "
            <script>
            alert('Maaf, Password yang Anda masukkan tidak sama');
            </script>
            ";
        }
         
    } else {
        echo "
        <script>
        alert('Maaf, form tidak boleh kosong');
        </script>
        ";
    }
}

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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../assets/dist/css/adminlte.css">
</head>
<body class="hold-transition login-page" style="background-image: url('../assets/dist/img/3.png'); background-size: cover;">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-16">
        <div class="login-box">
          <div class="card card-outline card-primary mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
              <a href="../index.php">
              <div class="login-logo">
    <img src="../assets/dist/img/cleon.png" alt="cleon" class="img-fluid" style="width: 180px;">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar Untuk Anggota Baru</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
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
        <div class="input-group mb-3">
          <input type="password" name="confirm" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" name="register" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="index.php" class="text-center">saya sudah memiliki akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../ssets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
</body>
</html>  
  