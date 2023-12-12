<?php
include("APheader.php");
include('../config/config.php');
?>
<?php
$no = 0;
$query=mysqli_query($conn, "SELECT * FROM filter_button");
while ($row=mysqli_fetch_assoc($query)) {
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">header setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">header Setting</li>
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
                <h3 class="card-title">Update Navbar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/button/edit_button.php" method="post" id="editForm">
                <div class="card-body">
                  <div class="form-group">
                      <label>semua</label>
                      <input type="hidden" name="id_navbar" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit1" value="<?php echo $row["button1"] ?>">
                      <label>filter pertama</label>
                      <input class="form-control" type="text" name="edit2" value="<?php echo $row["button2"] ?>">
                      <label>filter kedua</label>
                      <input class="form-control" type="text" name="edit3" value="<?php echo $row["button3"] ?>">
                      <label>filter ketiga</label>
                      <input class="form-control" type="text" name="edit4" value="<?php echo $row["button4"] ?>">
                      <label>filter keempat</label>
                      <input class="form-control" type="text" name="edit5" value="<?php echo $row["button5"] ?>">
                  </div>
                </div>
                <!-- /.card-body -->

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