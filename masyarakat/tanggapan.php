<?php
include '../config/koneksi.php';
if (!empty($_GET['id_pengaduan'])) {
    $id= $_GET['id_pengaduan'];
    $query= mysqli_query($koneksi, "SELECT a.*, b.* FROM tanggapan a INNER JOIN pengaduan b ON a.id_pengaduan=b.id_pengaduan WHERE b.id_pengaduan=$id");
    $data= mysqli_fetch_array($query);
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <div class="card">
            <div class="card-header">
                TANGGAPAN 
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Judul Laporan </label>
                        <input type="text" class="form-control" value="<?php echo $data['judul_laporan'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Isi Laporan </label>
                        <input type="text" class="form-control" value="<?php echo $data['isi_laporan'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto  </label>
                        <img src="../asset/img/<?php echo $data['foto'] ?>" class="form-control" style="width: 300px">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggapan </label>
                        <textarea class="form-control" readonly><?php echo $data['tanggapan'] ?></textarea>
                    </div>
                    </div>
                    <div class="card-footer" align="center">
                        <a href="index.php" class="btn btn-primary" >Kembali</a>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>