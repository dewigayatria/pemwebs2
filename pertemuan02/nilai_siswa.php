<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<P> Nama: $nama </P>";
    echo "<P> Mata Kuliah: $matkul </P>";
    echo "<P> Nilai UTS: $nilai_uts </P>";
    echo "<P> Nilai UAS: $nilai_uas </P>";
    echo "<P> Nilai Tugas: $nilai_tugas </P>";

    //status kelulusan
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    //check nilai total
    if ($nilai_total > 55) {
            echo "<p>status :lulus.</p>";
        } else {
            echo "<p>status : tidak lulus.</p>"; 
        }
    switch ($nilai_total) {
        case $nilai_total >= 85 && $nilai_total <= 100: 
            $grade = "A";
            $predikat = "sangat memuaskan";
            break;
        case $nilai_total >= 70 && $nilai_total <= 84:
            $grade = "B";
            $predikat = "memuaskan";
            break;
        case $nilai_total >= 56 && $nilai_total <= 69:
            $grade = "C";
            $predikat = "cukup";
            break;
        case $nilai_total >= 36 && $nilai_total <= 55:
            $grade = "D";
            $predikat = "tidak memuaskan";
            break;
        case $nilai_total >= 0 && $nilai_total <= 35:
            $grade = "E";
            $predikat = "sangat tidak memuaskan";
            break;
        default:
            $grade = "I";
            $predikat = "Tidak Ada";
    }

    echo "$nama mendapatkan grade $grade dengan predikat $predikat";
}
