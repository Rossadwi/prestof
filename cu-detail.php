<?php $jenis = $_GET['jenis'];?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Siprestof</title>
    <link rel="stylesheet" href="./soruce/style/cu-hk-detail.css" />
</head>

<body>
    <?php include './soruce/utils/navbar.php';?>
    <?php include './soruce/utils/header.php';?>

    <main>
        <section class="header">
            <?php $jenis = str_replace('-', ' ', $jenis);?>
            <h1>Verifikasi CU <?php echo $jenis?> : Detail</h1>
            <a href="">Kembali</a>
        </section>
        <h2>Data Pengajuan</h2>
        <?php
          
            if ($jenis === 'buku') {
                include './soruce/utils/CapaianUnggulan/karya-buku-detail.php';
            } elseif ($jenis === 'artikel') {
                include './soruce/utils/CapaianUnggulan/karya-artikel-detail.php';
            } elseif ($jenis === 'despro') {
                include './soruce/utils/CapaianUnggulan/karya-despro-detail.php';
            } elseif ($jenis === 'film') {
                include './soruce/utils/CapaianUnggulan/karya-film-detail.php'; 
            } elseif ($jenis === 'aplikom') {
                include './soruce/utils/CapaianUnggulan/karya-aplikom-detail.php'; 
            } elseif ($jenis === 'Aksi Kemanusiaan') {
                include './soruce/utils/CapaianUnggulan/aksi-kemanusiaan.php'; 
            } elseif ($jenis === 'Kewirausahaan') {
                include './soruce/utils/CapaianUnggulan/kewirausahaan.php'; 
            } else {
                $file_to_include = 'halaman-default.php'; // File default jika jenis tidak ditemukan
            }
        ?>
    </main>
</body>

</html>