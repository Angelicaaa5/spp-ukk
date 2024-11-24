<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>
    alert('maaf anda belum login')
    window.location.assign('../index2.php')
    </script>";
}
if ($_SESSION['level'] != 'admin') {
    echo "<script>
    alert('maaf anda bukan sesi admin')
    window.location.assign('../index2.php')
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta chatrset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin / Petugas - aplikasi pembayaran spp</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Anda Login Sebagai <b>ADMIN</b> Aplikasi Pembayaran SPP
        </div>
        <a href="admin.php" class="btn btn-primary"> Admin </a>
        <a href="admin.php?url=spp" class="btn btn-danger"> SPP </a>
        <a href="admin.php?url=kelas" class="btn btn-warning"> Kelas </a>
        <a href="admin.php?url=siswa" class="btn btn-success"> Siswa </a>
        <a href="admin.php?url=petugas" class="btn btn-secondary"> Petugas </a>
        <a href="admin.php?url=pembayaran" class="btn btn-info"> Pembayaran </a>
        <a href="admin.php?url=laporan" class="btn btn-danger"> Laporan </a>
        <a onclick="return confirm('Apakah Anda Yakin Ingin Logout')"  href="admin.php?url=logout" class="btn btn-dark"> Logout </a>

            <div class="card mt-2">
                <div class="card-body">
                    <!-- ini isi web kita -->
                    <?php
                    $file = @$_GET['url'];
                    if (empty($file)) {
                        echo "<h4>Selamat Datang di Halaman Admin</h4>";
                        echo "Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah";
                    } else {
                        include $file . '.php';
                    }
                    ?>
                </div>
            </div>

    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>