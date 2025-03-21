<?php
/**
 * Class Lingkaran
 * berfungsi untuk objek lingkaran dengan properti jari-jari
 * dan metode untuk menghitung luas dan keliling
 */
class Lingkaran{
    /**
     * @var float $jari2
     * properti untuk menampung nilai jari-jari
     */
    public $jari;
    /**
     * konstanta mneampung nilai phi
     */
    public const PHI = 3.14;

    /**
     * constructor untuk menginisialisasi nilai jari-jari
     * @return float
     */
    public function __construct($jari){
        $this->jari = $jari;
    }

    public function getLuas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
        
    }
        
    public function getKeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }
/**
 * method untuk mencetak infromasi lingkaran
 */
    public function cetak(){
        echo "Lingkaran dengan jari-jari" . $this->jari;
        echo "<br>Luas = " . $this->getLuas();
        echo "<br>Keliling = " . $this->getKeliling(); 
    }

}