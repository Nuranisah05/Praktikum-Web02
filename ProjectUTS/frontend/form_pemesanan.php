<?php
require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Budaya - Coffeeshops</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">E-Coffee Shop</span>
            <span class="site-heading-lower">BUDAYA</span>
        </h1>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Online Coffee Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../frontend/index.php">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../frontend/form_pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../frontend/products.php">Products</a>
                    </li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../frontend/admin/dashboard.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">FROM PEMESANAN</span>
                            </h2>
                            <form method="POST" action="admin/proses_pemesanan.php">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="alamat_pemesan" name="alamat_pemesan" value="" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">Nomor HP</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="no_hp" name="no_hp" value="" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="email" name="email" value="" type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="jumlah_pesanan" name="jumlah_pesanan" value="" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-8">
                                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="produk_id" class="col-4 col-form-label">Produk id</label>
                                    <div class="col-8">
                                        <?php
                                        $sqlproduk_id = "SELECT * FROM kategori_produk";
                                        $rsproduk_id = $dbh->query($sqlproduk_id);
                                        ?>
                                        <select id="produk_id" name="produk_id" class="custom-select">
                                            <?php
                                            foreach ($rsproduk_id as $rowproduk_id) {
                                            ?>
                                                <option value="<?= $rowproduk_id['id'] ?>"><?= $rowproduk_id['nama'] ?></option>
                                            <?php
                                            }
                                            ?>
                                            <!--
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                                <option value="3">Snack</option>-->

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Coffee Shop &copy; 2023 by Nuranisah</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>