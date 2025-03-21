<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }
    public function hitungLuas(){
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling(){
        return 2 * $this->panjang + 2 * $this->lebar;
    }
}

    $persegi1 = new PersegiPanjang(5, 6);
    echo "Luas Persegi Panjang: " . $persegi1->hitungLuas() . "<br>";
    echo "Keliling Persegi Panjang: " . $persegi1->hitungKeliling();



?>