<?php
include("APheader.php");
include('../config/config.php');
?>
<?php
$no = 0;
$query=mysqli_query($conn, "SELECT * FROM kontak");
while ($row=mysqli_fetch_assoc($query)) {
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kontak setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kontak Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" id="card_edit<?php echo $no ?>">
              <div class="card-header">
                <h3 class="card-title">Update Kontak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/kontak/edit_kontak.php" method="post" id="editForm">
                <div class="card-body">
                  <div class="form-group">
                      <label>Email</label>
                      <input type="hidden" name="id_kontak" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_email" value="<?php echo $row["email"] ?>">
                      <label>Kontak</label>
                      <input class="form-control" type="text" name="edit_kontak" value="<?php echo $row["kontak"] ?>">
                      <label>Alamat</label>
                      <textarea class="form-control" type="text" name="edit_alamat" value="<?php echo $row["alamat"] ?>"><?php echo $row["alamat"] ?></textarea>
                      <label>Twitter</label>
                      <input class="form-control" type="text" name="edit_twitter" value="<?php echo $row["twitter"] ?>">
                      <label>Facebook</label>
                      <input class="form-control" type="text" name="edit_facebook" value="<?php echo $row["facebook"] ?>">
                      <label>Instagram</label>
                      <input class="form-control" type="text" name="edit_instagram" value="<?php echo $row["instagram"] ?>">
                  </div>
                </div>
                
                <div class="card-footer float-right">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Perbarui</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php
              }
            ?>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<script>
   document.getElementById('editForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const form = this;
        const formData = new FormData(form);

        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire({
                icon: data.status === 'success' ? 'success' : 'error',
                title: data.status === 'success' ? 'Okey Admin !' : 'Error',
                text: data.message,
                position: 'center',
                showConfirmButton: false,
                timer: data.status === 'success' ? 2000 : null,
                onClose: () => {
                    if (data.status === 'success') {
                      location.reload(); // Halaman reload otomatis
                    }
                }
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

<?php
include("APfooter.php");
?>