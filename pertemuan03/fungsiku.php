<?php
/**
 * Fungsi untuk menghitung nilai akhir
 * @param float $nilai_uts nilai UTS
 * @param float $nilai_uas nilai UAS
 * @param float $nilai_tugas nilai tugas
 * @paraf float nilai akhir
 */
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas){
    define("UTS", 0.25);
    define("UAS", 0.30);
    define("TUGAS", 0.45);
    return UTS*$nilai_uts + UAS*$nilai_uas + TUGAS*$nilai_tugas;
}

/**
 * Fungsi untuk menentukan kelulusan
 * @param float $nilai_akhir nilai akhir
 * @param float $batas_nilai batas nilai kelulusan default 60
 * @return string LULUS/TIDAK LULUS
 */
function kelulusan($nilai_akhir, $batas_nilai =60){
    if($nilai_akhir >= 60){
        return "Lulus";
    }else{
        return "Tidak Lulus";
    }
}
?>