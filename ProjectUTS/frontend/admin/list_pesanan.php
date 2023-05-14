<?php
require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
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

    <title>Daftar Pesanan</title>
</head>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pesanan</h1>
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
                                <th>Tanggal Pembelian</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th>Email</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['nama_pemesan'] ?></td>
                                    <td><?= $row['alamat_pemesan'] ?></td>
                                    <td><?= $row['no_hp'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['jumlah_pesanan'] ?></td>
                                    <td><?= $row['produk_id'] ?></td>
                                    <td><?= $row['deskripsi'] ?></td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
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