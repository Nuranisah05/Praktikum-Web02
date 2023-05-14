<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
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
                        <h1>Data Produk</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-primary" href="form_produk.php" role="button">Tambah Produk</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Minimal Stok</th>
                                <th>Deskripsi</th>
                                <th>Kategori Produk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row['kode'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['harga_jual'] ?></td>
                                    <td><?= $row['harga_beli'] ?></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td><?= $row['min_stok'] ?></td>
                                    <td><?= $row['deskripsi'] ?></td>
                                    <td><?= $row['kategori_produk_id'] ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                                        <a class="btn btn-warning" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

                <?php
                require_once 'footer.php';
                ?>


                <!-- Optional JavaScript; choose one of the two! -->
                <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>