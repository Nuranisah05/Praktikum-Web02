<?php
require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';


$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Daftar Pesanan</title>
</head>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Pesanan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
       
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td><?= $row['id'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pesanan</td>
                    <td><?= $row['tanggal'] ?></td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td><?= $row['nama_pemesan'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Pemesan</td>
                    <td><?= $row['alamat_pemesan'] ?></td>
                </tr>
                <tr>
                    <td>Nomor Pemesan</td>
                    <td><?= $row['no_hp'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $row['email'] ?></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td><?= $row['jumlah_pesanan'] ?></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><?= $row['produk_id'] ?></td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td><?= $row['deskripsi'] ?></td>
                </tr>
            </tbody>
        </table>


        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>