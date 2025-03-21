<?php
require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(20);
echo "jari-jari lingkaran 1 = " . $lingkaran1->jari;
echo "<br>Nilai PHI = " . $lingkaran1->getLuas();
echo "<br>Luas lingkaran 1 = " . $lingkaran1->getLuas();
echo "<br>Keliling lingkaran 1 = " . $lingkaran1->getKeliling();
echo "<hr>" ;
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();
?>
