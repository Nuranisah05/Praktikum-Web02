<?php 
require_once 'dbkoneksi.php';

$iddel=$_GET['iddel'];
$query="DELETE FROM pelanggan WHERE id=?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);
// redirect page
header('location:list_pelanggan.php');

?>