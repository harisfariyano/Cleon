<?php
include("APheader.php");
include('../config/config.php');
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Paket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paket</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  <i class="fas fa-pencil-alt"></i>Tambah Paket
                </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Koneksi</th>
                      <th>Kategori</th> 
                      <th>Paket</th>  
                      <th>Harga</th>  
                      <th>Masa aktiv</th>  
                      <th>Kuota</th>
                      <th>Kecepatan</th>  
                      <th>Deskripsi</th>
                      <th>Action</th>  
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                        $no = 0;
                        $query=mysqli_query($conn, "SELECT * FROM paket_internet");
                        while ($row=mysqli_fetch_assoc($query)) {
                        $no++;
                      ?>
                      <!-- Tampilkan data dari database ke dalam tabel -->
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row["koneksi"] ?></td>
                        <td><?php echo $row["kategori"] ?></td>
                        <td><?php echo $row["nama_paket"] ?></td>
                        <td><?php echo $row["harga"] ?></td>
                        <td><?php echo $row["masa_aktiv"] ?></td>
                        <td><?php echo $row["kuota"] ?></td>
                        <td><?php echo $row["kecepatan"] ?></td>
                        <td><?php echo $row["deskripsi"] ?></td>
                        <td>
                          <!-- Tombol Edit yang memicu modal -->
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $no ?>">
                          <i class="bi bi-pencil-square"></i>Edit
                          </button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_delete<?php echo $no ?>">
                          <i class="bi bi-trash-fill"></i>Hapus
                          </button>
                        </td>
                      </tr>

                      <!-- start modal tambah paket -->
                      <div class="modal fade" id="modal_delete<?php echo $no ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Yakin ingin menghapus Paket ini ?</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- form start -->
                              <form action="../backend/produk/delete_paket.php" method="post">
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Paket yang akan dihapus</label>
                                    <input type="hidden" name="id_paket" 
                                    value="<?php echo $row["id"] ?>">
                                    <input type="text" class="form-control" name="edit_paket" placeholder="Enter paket" 
                                    value="<?php echo $row["nama_paket"] ?>"readonly>
                                  </div>
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                  <button type="button" class="btn btn-primary" class="close" data-dismiss="modal" aria-label="Close">Batal</button>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

                        <!-- start modal ubah data paket -->
                        <div class="modal fade" id="modal_edit<?php echo $no ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Paket yang ingin diubah</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <!-- form start -->
                                <form action="../backend/produk/edit_paket.php" method="post" class="form-edit">
                                  <div class="card-body">
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Koneksi</label>
                                      <input type="hidden" name="id_paket" 
                                      value="<?php echo $row["id"] ?>">
                                      <input type="text" class="form-control" name="edit_koneksi" placeholder="Enter koneksi" 
                                      value="<?php echo $row["koneksi"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Kategori</label>
                                      <div><i style="float: left; font-size: 11px; color: red;">Perhatikan Besar kecil Huruf</i></div>
                                      <input type="text" class="form-control" name="edit_kategori" placeholder="Enter kategori" 
                                      value="<?php echo $row["kategori"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Paket</label>
                                      <input type="text" class="form-control" name="edit_paket" placeholder="Enter paket" 
                                      value="<?php echo $row["nama_paket"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Harga</label>
                                      <input type="text" class="form-control" name="edit_harga" placeholder="Enter harga" 
                                      value="<?php echo $row["harga"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Masa aktiv</label>
                                      <input type="text" class="form-control" name="edit_MA" placeholder="Enter masa aktiv" 
                                      value="<?php echo $row["masa_aktiv"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Kouta</label>
                                      <input type="text" class="form-control" name="edit_Kuota" placeholder="Enter kuota"
                                      value="<?php echo $row["kuota"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Kecepatan</label>
                                      <input type="text" class="form-control" name="edit_Kecepatan" placeholder="Enter Kecepatan"
                                      value="<?php echo $row["kecepatan"] ?>" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea type="text" class="form-control" name="edit_Deskripsi" placeholder="Enter Deskripsi" value="<?php echo $row["deskripsi"] ?>"required><?php echo $row["deskripsi"] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbarui</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <?php
                              }
                        ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->


        <!-- start modal tambah paket -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Paket yang ingin ditambahkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="../backend/produk/insert_paket.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Koneksi</label>
                      <input type="text" class="form-control" name="insert_koneksi" placeholder="Enter Koneksi paket" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kategori Paket</label>
                      <div><i style="float: left; font-size: 11px; color: red;">Perhatikan Besar kecil Huruf</i></div>
                      <input type="text" class="form-control" name="insert_kategori" placeholder="Enter Kategori paket" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Paket</label>
                      <input type="text" class="form-control" name="insert_paket" placeholder="Enter paket" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Harga</label>
                      <input type="text" class="form-control" name="insert_harga" placeholder="Enter harga" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Masa aktiv</label>
                      <input type="text" class="form-control" name="insert_MA" placeholder="Enter masa aktiv" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kouta</label>
                      <input type="text" class="form-control" name="insert_Kuota" placeholder="Enter kuota" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kecepatan</label>
                      <input type="text" class="form-control" name="insert_Kecepatan" placeholder="Enter Kecepatan" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <input type="text" class="form-control" name="insert_Deskripsi" placeholder="Enter Deskripsi" required>
                      <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary"> Tambah</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- Sweetalert2 tambah data -->
<script>
  // Event listener untuk submit form pada modal "Tambah Paket"
  document.querySelector('#modal-default form').addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan perilaku default dari form

    // Lakukan submit form menggunakan AJAX atau fetch
    fetch(this.getAttribute('action'), {
        method: 'POST',
        body: new FormData(this)
      })
      .then(response => response.json())
      .then(data => {
        // Tampilkan SweetAlert2 untuk memberi tahu hasil penambahan data
        Swal.fire({
          icon: data.status === 'success' ? 'success' : 'error',
          title: data.status === 'success' ? 'Success' : 'Error',
          text: data.message,
          showConfirmButton: false,
          timer: 2000
        });

        // Jika penambahan data berhasil, lakukan reload setelah sedikit penundaan
        if (data.status === 'success') {
          setTimeout(() => {
            location.reload(); // Reload halaman untuk melihat data baru
          }, 2500); // Waktu penundaan sebelum reload (dalam milidetik)
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });
</script>

<!-- Sweetalert2 ubah data -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const formsEdit = document.querySelectorAll('form[action="../backend/produk/edit_paket.php"]');
    
    formsEdit.forEach(formEdit => {
      formEdit.addEventListener('submit', function(event) {
        event.preventDefault();

        Swal.fire({
          title: 'Apakah Anda yakin?',
          text: 'Anda akan memperbarui data ini.',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, perbarui!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            const formData = new FormData(formEdit);
            fetch(formEdit.getAttribute('action'), {
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
              Swal.fire({
                icon: data.status === 'success' ? 'success' : 'error',
                title: data.status === 'success' ? 'Success' : 'Error',
                text: data.message,
                showConfirmButton: false,
                timer: 1500
              });

              if (data.status === 'success') {
                setTimeout(() => {
                  location.reload(); // Melakukan reload halaman setelah pembaruan berhasil
                }, 2000);
              }
            })
            .catch(error => {
              console.error('Error:', error);
            });
          }
        });
      });
    });
  });
</script>

<!-- Sweetalert2 hapus data --> 

<?php
include("APfooter.php");
?>