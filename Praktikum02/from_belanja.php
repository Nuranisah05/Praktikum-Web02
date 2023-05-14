<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8">

                <h3 style="text-align:center;">Belanja Online</h3>
                <hr>
                <form method="POST" action="">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Customer</label>
                        <div class="col-8">
                            <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Produk Pilihan</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk_pilihan" id="produk_pilihan_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_pilihan_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk_pilihan" id="produk_pilihan_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_pilihan_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk_pilihan" id="produk_pilihan_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_pilihan_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV: 4.200.000</li>
                    <li class="list-group-item">KULKAS: 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI: 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">DAFTAR HARGA DAPAT BERUBAH</li>
                </ul>
            </div>
        </div>


        <?php
        //$proses = $_POST["kirim"];
        //$nama_costumer = $_POST["cs"];
        //$produk_pilihan = $_POST["produk_pilihan"];
        //$jumlah_beli = $_POST["jumlah"];

        if(isset($_POST['kirim'])) : ?>

        Nama customer : <?= $_POST['cs'] ?>
        <br>
        Produk Pilihan : <?= $_POST['produk_pilihan'] ?>
        <br>
        Jumlah Beli : <?= $_POST['jumlah'] ?>
        <br>


        <?php
        if( $_POST['produk_pilihan'] == 'TV' && $_POST['jumlah'] >=1){
        $harga = 4200000 * $_POST['jumlah'];
        echo "TOTAL HARGA : " . number_format($harga,0,".",".");
        } elseif ($_POST['produk_pilihan'] == 'Kulkas' && $_POST['jumlah'] >=1){
        $harga = 3100000 * $_POST['jumlah'];
        echo "TOTAL HARGA : " . number_format($harga,0,".",".");
        } elseif ($_POST['produk_pilihan'] == 'Mesin Cuci' && $_POST['jumlah'] >=1){
        $harga = 3800000 * $_POST['jumlah'];
        echo "TOTAL HARGA : " . number_format($harga,0,".",".");
        }

        ?>
        
        
<?php endif?>






    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>