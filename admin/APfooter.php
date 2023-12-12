  </div><!-- /.container-fluid -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    <strong>Copyright &copy; 2022-2023 <a href="index.php">Cleon</a>.</strong> All rights reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- Note  & Plugins -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const currentPage = window.location.href;

  const navLinks = document.querySelectorAll('.nav-item a');

  navLinks.forEach(link => {
    if (link.href === currentPage) {
      link.classList.add('active');

      // Jika ingin menandai elemen induk sebagai aktif
      const parentNav = link.closest('.nav-item');
      if (parentNav) {
        parentNav.classList.add('menu-open');
      }
    }
  });
});
</script>
<script>
let timeout;

function startTimer() {
  timeout = setTimeout(logout, 1800000); // 30 menit (dalam milidetik)
}

function resetTimer() {
  clearTimeout(timeout);
  startTimer();
}

function logout() {
  window.location.href = 'Logout.php'; // Ganti dengan halaman logout Anda
}

// Event untuk mendeteksi aktivitas pengguna
document.addEventListener('mousemove', resetTimer);
document.addEventListener('keypress', resetTimer);

// Memulai timer saat halaman dimuat
startTimer();
</script>


</body>
</html>
