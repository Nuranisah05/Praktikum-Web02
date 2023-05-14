<?php 
//buat fungsi
function hitungUmur($thn_lahir) {
    //code fungsi
    $thn_sekarang = 2023;
    //hitung umur
    $umur = $thn_lahir - $thn_sekarang;
    // kembaliin umur
    return $umur;
}

//pamggil fungsi 
echo "Umur saya adalah" . hitungUmur(2005);

?>