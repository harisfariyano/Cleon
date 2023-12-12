<?php
include("APheader.php");
include('../config/config.php');
?>
<?php
$no = 0;
$query=mysqli_query($conn, "SELECT * FROM about");
while ($row=mysqli_fetch_assoc($query)) {
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About setting</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About Setting</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary col-md-8" id="card_edit<?php echo $no ?>">
              <div class="card-header">
                <h3 class="card-title">Update About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/about/edit_about.php" method="post" enctype="multipart/form-data" id="editForm">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="hidden" name="id_about" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_judul" value="<?php echo $row["judul"] ?>"></input>
                      <label>Deskripsi</label>
                      <textarea class="form-control" type="text" style="height: 150px" name="edit_dsection" value="<?php echo $row["dsection"] ?>"><?php echo $row["dsection"] ?></textarea>
                      <label>Judul konten 1</label>
                      <textarea class="form-control" type="text" style="height: 50px" name="edit_jkontenp1" value="<?php echo $row["jkontenp1"] ?>"><?php echo $row["jkontenp1"] ?></textarea>
                      <label>Gambar konten 1</label>
                      <!-- Penampakan gambar yang dipilih untuk gambar kesatu -->
                      <div id="preview_1"></div>
                      <div><i style="float: left; font-size: 11px; color: red;">Disarankan ukuran gambar 1024x768 pixel</i></div>
                      <input class="form-control" type="file" id="edit_gambarp1" name="edit_gambarp1" onchange="previewImage(event, 'preview_1')" accept="image/*" style="cursor: pointer;">
                      <label>Konten 1</label>
                      <textarea class="form-control" type="text" style="height: 150px" name="edit_kontenp1" value="<?php echo $row["kontenp1"] ?>"><?php echo $row["kontenp1"] ?></textarea>
                      <label>Judul Konten 2</label>
                      <textarea class="form-control" type="text" style="height: 50px" name="edit_jkontenp2" value="<?php echo $row["jkontenp2"] ?>"><?php echo $row["jkontenp2"] ?></textarea>
                      <label>Gambar konten 2</label>
                      <!-- Penampakan gambar yang dipilih untuk gambar kedua -->
                      <div id="preview_2"></div>  
                      <div><i style="float: left; font-size: 11px; color: red;">Disarankan ukuran gambar 1024x768 pixel</i></div>
                      <input class="form-control" type="file" id="edit_gambarp2" name="edit_gambarp2" onchange="previewImage(event, 'preview_2')" accept="image/*" style="cursor: pointer;">
                      <label>Konten 2</label>
                      <textarea class="form-control" type="text" style="height: 150px" name="edit_kontenp2" value="<?php echo $row["kontenp2"] ?>"><?php echo $row["kontenp2"] ?></textarea>
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

<!-- HTML untuk input gambar kedua -->



<!-- Skrip JavaScript untuk preview gambar dan SweetAlert2 -->
<script>
    function previewImage(event, previewId) {
        const preview = document.getElementById(previewId);
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
                localStorage.setItem(previewId, e.target.result);
            }
            
            reader.readAsDataURL(file);
        }
    }

    // Memeriksa apakah ada gambar yang disimpan di localStorage saat halaman dimuat kembali
    window.onload = function() {
        for (let i = 1; i <= 2; i++) {
            const previewId = 'preview_' + i;
            const savedImage = localStorage.getItem(previewId);
            
            if (savedImage) {
                const img = document.createElement('img');
                img.setAttribute('src', savedImage);
                img.setAttribute('style', 'width: 120px; margin-bottom: 5px;');
                
                // Menampilkan kembali gambar yang dipilih setelah reload
                document.getElementById(previewId).appendChild(img);
            }
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