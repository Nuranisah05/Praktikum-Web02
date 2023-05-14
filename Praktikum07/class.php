<?php 
//Bikin Class BMIPASIEN
class bmiPasien{
    //Bikin propoty
    public $nama, $berat, $tinggi, $umur, $jk;

    //Construct : data nya diset sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        //masukin data
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;

    }

    //bikin method
    public function hasilBMI(){
        //logic
        $tinggi_m = $this->tinggi / 100;
        //rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    //bikin method
    public function statusBMI(){
        //simpan data bmi
        $bmi = $this->hasilBMI();
        //cek data menjadi status
        if ($bmi < 18.5){
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9){
            return "Normal (Ideal)";
        } elseif ($bmi >=25 && $bmi <=29) {
            return "Kelebihan Berat Badan";
        } else {
            return "Obesitas";
        }

    }
}

// Bikin objek
// $pasien = new bmipasien("Udin", "59", "174", "19", "L");
// echo "Nama :" . $pasien->nama . "<br>";
// echo "BMI :" . $pasien->hasilBMI() . "<br>";
// echo "Status BMI : " . $pasien->statusBMI() . "<br>";
?>