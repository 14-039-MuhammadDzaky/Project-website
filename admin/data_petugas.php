<div class="container">
    <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            DATA PETUGAS
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</a>

                            <!-- Modal verifikasi-->
                            <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Masyarakat</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        <form action="" method="POST">
                                        <input type="hidden" name="id_pengaduan" value="">
                                            <div class="row mb-2">
                                            <label class="col-md-4">Nama Lengkap</label>
                                            <div class="col-md-4">
                                                <input type="text" name="nama_petugas" class="form-control" placeholder="Masukan Nama Lengkap" required>
                                            </div>
                                            </div>
                                            <div class="row mb-2">
                                            <label class="col-md-4">Username</label>
                                            <div class="col-md-4">
                                                <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                                            </div>
                                            </div>
                                            <div class="row mb-2">
                                            <label class="col-md-4">Password</label>
                                            <div class="col-md-4">
                                                <input type="password" name="password" class="form-control" placeholder="Masukan password" required>
                                            </div>
                                            </div>
                                            <div class="row mb-2">
                                            <label class="col-md-4">telp</label>
                                            <div class="col-md-4">
                                                <input type="number" name="telp" class="form-control" placeholder="Masukan telp" required>
                                            </div>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                                    <button type="submit" name="kirim" class="btn btn-primary">Daftar</button>
                                                </div>
                                             </form>
                                             <?php
                                             include'../config/koneksi.php';
                                             if (isset($_POST['kirim'])) {
                                                 $nama_petugas = $_POST['nama_petugas'];
                                                 $username = $_POST['username'];
                                                 $password = md5($_POST['password']);
                                                 $telp = $_POST['telp'];
                                                 $level = 'petugas';
                                             
                                                 $query = mysqli_query($koneksi, "INSERT INTO petugas VALUES('' , '$nama_petugas' , '$username' , '$password' , '$telp' , '$level')");
                                             
                                                 if ($query) {
                                                     header('location:index.php?page=petugas');
                                                 }
                                             }
                                             ?>
                                                </div>
                                            </div>
                                            </div>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>USERNAME</th>
                                        <th>TELP</th>
                                        <th>LEVEL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include '../config/koneksi.php';
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM petugas");
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama_petugas'] ?></td>
                                        <td><?php echo $data['username'] ?></td>
                                        <td><?php echo $data['level'] ?></td>
                                        <td><?php echo $data['telp'] ?></td>
                                    <td>
                                    <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_petugas'] ?>">Hapus</a>
                                    <!-- Modal tanggapi-->
                                    <div class="modal fade" id="hapus<?php echo $data['id_petugas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data : </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="edit_data.php" method="POST">
                                                <input type="hidden" name="nik" value="<?php echo $data['id_petugas']?>">
                                                <p>Apakah anda yakin ingin menghapus data <br> <?php echo $data['nama_petugas']?></p>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="hapus_petugas" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                    </div>
                                    </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
    </div>
</div>