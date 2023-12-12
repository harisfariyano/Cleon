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
            <h1 class="m-0">TOS setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">TOS Setting</li>
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
                  <i class="fas fa-pencil-alt"></i>Tambah data
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
                      <th>Title</th>
                      <th>Icon</th> 
                      <th>Deskripsi</th>    
                      <th>Action</th>  
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 0;
                      $query=mysqli_query($conn, "SELECT * FROM tos_content");
                      while ($row=mysqli_fetch_assoc($query)) {
                      $no++;
                    ?>
                    <!-- Tampilkan data dari database ke dalam tabel -->
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row["title"] ?></td>
                      <td><i class="<?php echo $row["icon_class"] ?>"></i></td>
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
                    
                    <!-- start modal hapus tos -->
                    <div class="modal fade" id="modal_delete<?php echo $no ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Yakin ingin menghapus data ini ?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- form start -->
                            <form action="../backend/tos/delete_tos.php" method="post">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">tos</label>
                                  <input type="hidden" name="id_tos" 
                                  value="<?php echo $row["id"] ?>">
                                  <input type="text" class="form-control" name="edit_tos" placeholder="Enter tos" 
                                  value="<?php echo $row["title"] ?>"readonly>
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

                    <!-- start modal edit tos -->
                    <div class="modal fade" id="modal_edit<?php echo $no ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">tos yang ingin diubah</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <!-- form start -->
                            <form action="../backend/tos/edit_tos.php" method="post" class="form-edit">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="hidden" name="id_tos" 
                                  value="<?php echo $row["id"] ?>">
                                  <input type="text" class="form-control" name="edit_title" placeholder="Enter tos" 
                                  value="<?php echo $row["title"] ?>" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Icon</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="edit_icon" value="<?php echo $row["icon_class"] ?>" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <textarea class="form-control" type="text" name="edit_Deskripsi_tos" placeholder="Enter Deskripsi" value="<?php echo $row["deskripsi"] ?>" required><?php echo $row["deskripsi"] ?></textarea>
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


        <!-- start modal tambah tos -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">tos yang ingin ditambahkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form action="../backend/tos/insert_tos.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="insert_title_tos" placeholder="Enter tos">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Icon</label>
                      <input type="text" class="form-control" name="insert_incon_tos" placeholder="Enter Icon">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <input type="text" class="form-control" name="insert_deskripsi_tos" placeholder="Enter Deskripsi">
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
  // Event listener untuk submit form pada modal "Tambah tos"
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
    const formsEdit = document.querySelectorAll('form[action="../backend/tos/edit_tos.php"]');
    
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
<!-- <script>
  function deleteData(id) {
    const deleteUrl = `../backend/tos/delete_tos.php?id_tos=${id}`;

    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Anda tidak dapat mengembalikan data yang sudah dihapus!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        fetch(deleteUrl, { method: 'DELETE' })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Data berhasil dihapus',
              showConfirmButton: false,
              timer: 1500
            });
            setTimeout(() => {
              location.reload();
            }, 2000);
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }
    });
  }
</script> -->

<?php
include("APfooter.php");
?>