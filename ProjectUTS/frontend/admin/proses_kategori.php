<?php 
require_once 'dbkoneksi.php'
?>

<?php 
$_id = $_POST['id'];
$_nama = $_POST['nama'];

$_proses= $_POST['proses'];

//array data
$ar_data[]=$_id;
$ar_data[]=$_nama;

if ($_proses == "Simpan") {
   //data baru
   $sql = "INSERT INTO kategori_produk (id,nama) VALUES (?,?)";
}else if($_proses == "Update") {
   $ar_data[]=$_POST['idedit'];
   $sql = "UPDATE kategori_produk SET id=?,nama=? WHERE id=?";
}

if(isset($sql)){
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}


header('location:list_kategori.php')


?>