<?php
require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';


$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
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

    <title>Daftar Produk</title>
</head>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Produk</h1>
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
                    <td>Kode</td>
                    <td><?= $row['kode'] ?></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><?= $row['nama'] ?></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><?= $row['harga_jual'] ?></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><?= $row['harga_beli'] ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><?= $row['stok'] ?></td>
                </tr>
                <tr>
                    <td>Minimum Stok</td>
                    <td><?= $row['min_stok'] ?></td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td><?= $row['deskripsi'] ?></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><?= $row['kategori_produk_id'] ?></td>
                </tr>
            </tbody>
        </table>


        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>