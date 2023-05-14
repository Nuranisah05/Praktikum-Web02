<?php 
//Bikin Class Persegi Panjang
class persegipanjang{
    //Bikin propoty
    public $panjang, $lebar;

    function __construct($panjang, $lebar) {
        //masukan data
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    //Buat method
    public function luasPersegi(){
        //Rumus luas persegi Panjang
        //$luas = ($this->panjang * $this->lebar);
        return round($this->panjang * $this->lebar);
    }

    //Buat method
    public function kelilingPersegi(){
        //Rumus keliling persegi panjang
        //$keliling = 2 * ($this->panjang + $this->lebar);
        return round(2 * ($this->panjang + $this->lebar));
    }
}

?>