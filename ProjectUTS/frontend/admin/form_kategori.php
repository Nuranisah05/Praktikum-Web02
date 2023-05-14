<?php
require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';
?>
<?php
$sql = "SELECT * FROM kategori_produk";
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

    <title>Form Kategori</title>
</head>

<body>

<div class="container">
        <div class="col-8">
            <h1>FORM KATEGORI</h1>
            <hr>

            <form method="POST" action="proses_kategori.php">
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label">ID</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="id" name="id" type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Kategori</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="nama" name="nama" type="text" class="form-control" value="">
                        </div>
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
        
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>