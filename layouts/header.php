<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pengaduan Masyarakat | Nama Peserta</title>
    <link rel="stylesheet" type="text/css"href="../asset/css/bootstrap.min.css">
</head>
<body>
<style>
    body {
      background-image: url('../asset/img/harvey.jpg');
      background-size: cover;
    }
  </style>
    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-transparant">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color:white"><b><h3 class="text-center">Pengaduan Masyarakat</h3></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggles="collapse" data-bs-target="#navbarNavAltMarkup" aria-control="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                   
                        <?php 
                        if ($_SESSION['login'] == 'admin')  { ?>
                        <a href="index.php?page=petugas" class="nav-link" ><b> Data Petugas</b></a>
                        <a href="index.php?page=masyarakat" class="nav-link" ><b> Data Masyarakat</b></a>
                        <a href="index.php?page=tanggapan" class="nav-link" ><b> Data Tanggapan</b></a>
                        <a href="index.php?page=pengaduan" class="nav-link" ><b> Data Pengaduan</b></a>
                        <a href="../config/aksi_logout.php" class="nav-link" ><b> Logout </b></a>

                        <?php } elseif ($_SESSION['login'] == 'petugas') { ?>
                            <a href="index.php?page=pengaduan" class="nav-link" ><b> Data Pengaduan</b></a>
                            <a href="../config/aksi_logout.php" class="nav-link" ><b> Logout </b></a>

                        <?php } elseif ($_SESSION['login'] == 'masyarakat') {  ?>
                            <a href="../config/aksi_logout.php" class="nav-link" ><b> Logout </b></a>  
                            
                        <?php } else { ?>
                            <a href="index.php?page=registrasi" class="nav-link" ><b> Daftar Akun</b> </a>
                            <a href="index.php?page=login" class="nav-link" ><b>  Login </b></a>
                        
                        <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
    </body>
</html>