<?php

// variabel user
$nama_depan = "aisyah";
$nama_belakang = 'dewi';
$nama_paling_belakang = "gayatri";
$umur = 18;
$tb = 157;

echo $nama_depan . " " . $nama_belakang ." ". $nama_paling_belakang;
echo "<br>nama saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

// variable system
echo 'Dokumen root' . $_SERVER["DOCUMENT_ROOT"];

// variable constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r *$r;

echo "lingkaran dengan jari jari {$r}cm memiliki luas {$luas} cm2";