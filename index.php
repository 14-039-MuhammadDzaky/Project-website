<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pengaduan Masyarakat | Nama Peserta</title>
    <link rel="stylesheet" type="text/css"href="asset/css/bootstrap.min.css">
</head>
<body>
<style>
    body {
      background-image: url('asset/img/harvey.jpg');
      background-size: cover;
    }
  </style>
    
    <nav class="navbar navbar-expand-lg bg-body-transparan">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color:white"><b><h3 class="text-center">Pengaduan Masyarakat</h3></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggles="collapse" data-bs-target="#navbarNavAltMarkup" aria-control="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=registrasi"><b>Daftar Akun</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login"><b>Login</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'login':
                include'login.php';
                break;
            case 'registrasi':
                include'registrasi.php';
                break;
                
            default:
            echo"Halaman Tidak Tersedia";
                break;
        }
        } else {
            include'home.php';
        }
    ?>
    <footer class="footer py-2 bg-transparant fixed-bottom">
        <div class="container">
            <b><h4 class="text-center" >MUHAMMAD DZAKY  |  SMKN 7 BANDAR LAMPUNG</h4></b>
        </div>
    </footer>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>