<?php
include("APheader.php");
include('../config/config.php');
?>
<?php
$no = 0;
$query=mysqli_query($conn, "SELECT * FROM hero_content");
while ($row=mysqli_fetch_assoc($query)) {
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">home page setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">home page Setting</li>
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
                <h3 class="card-title">Update Home page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/home_page/edit_hp.php" method="post" enctype="multipart/form-data" id="editForm">
                <div class="card-body">
                  <div class="form-group">
                      <label>Tagline</label>
                      <input type="hidden" name="id_hero" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_tagline" value="<?php echo $row["tagline"] ?>">
                      <label>Deskripsi</label>
                      <textarea class="form-control" type="text" name="edit_deskripsi" value="<?php echo $row["deskripsi"] ?>"><?php echo $row["deskripsi"] ?></textarea>
                      <label>Gambar Utama</label>
                      <div id="preview"></div>
                      <div style="float: left;">
                        <input class="form-control" style="width: 290px;" type="file" id="edit_gambar" name="edit_gambar" onchange="previewImage(event)" accept="image/*">
                        <i style="font-size: 11px; color: red;">Disarankan ukuran gambar 694x359 pixel</i>
                      </div>
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

<!-- Skrip JavaScript untuk preview gambar dan SweetAlert2 -->
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        preview.innerHTML = ''; // Menghapus gambar sebelumnya jika ada
        
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.setAttribute('src', e.target.result);
                img.setAttribute('style', 'width: 120px; margin-bottom: 5px;');
                
                // Menampilkan gambar yang dipilih
                preview.appendChild(img);
                
                // Simpan gambar dalam localStorage (opsional)
                localStorage.setItem('selectedImage', e.target.result);
            }
            
            reader.readAsDataURL(file);
        }
    }

    // Memeriksa apakah ada gambar yang disimpan di localStorage saat halaman dimuat kembali
    window.onload = function() {
        const savedImage = localStorage.getItem('selectedImage');
        
        if (savedImage) {
            const img = document.createElement('img');
            img.setAttribute('src', savedImage);
            img.setAttribute('style', 'width: 120px; margin-bottom: 5px;');
            
            // Menampilkan kembali gambar yang dipilih setelah reload
            document.getElementById('preview').appendChild(img);
        }
    };

    // Skrip untuk menangani pengiriman formulir dan menampilkan SweetAlert2
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