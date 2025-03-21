<?php
require_once 'class_nilai_mahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama ="ayy";
$mhs1->mata_kuliah = "pemweb";
$mhs1->nilai_tugas = "90";
$mhs1->nilai_uts = "80";
$mhs1->nilai_uas = "77";

$mhs2 = new NilaiMahasiswa();
$mhs2->nama ="rido";
$mhs2->mata_kuliah = "ddp";
$mhs2->nilai_tugas = "88";
$mhs2->nilai_uts = "67";
$mhs2->nilai_uas = "59";

$mhs3 = new NilaiMahasiswa();
$mhs3->nama ="marfuah";
$mhs3->mata_kuliah = "pti";
$mhs3->nilai_tugas = "100";
$mhs3->nilai_uts = "76";
$mhs3->nilai_uas = "98";

$daftar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<h2 style="text-align: center">DAFTAR NILAI MAHASISWA</h2>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>no</th><th>nama</th>
            <th>mata kuliah</th>
            <th>nilai tugas</th>
            <th>nilai uts</th>
            <th>nilai uas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST['submit'])){
            $mhs4 = new NilaiMahasiswa();
            $mhs4->nama = $_POST['nama'];
            $mhs4->mata_kuliah = $_POST['matkul'];
            $mhs4->nilai_tugas = $_POST['nilai_tugas'];
            $mhs4->nilai_uts = $_POST['nilai_uts'];
            $mhs4->nilai_uas = $_POST['nilai_uas'];
    
            $daftar_nilai[] = $mhs4;
        }
        ?>
        <?php
        $no = 1;
        foreach( $daftar_nilai as $obj){
            ?>
        <tr>
            <td><?=$no ?></td>
            <td><?=$obj->nama ?></td>
            <td><?=$obj->mata_kuliah ?></td>
            <td><?=$obj->nilai_tugas ?></td>
            <td><?=$obj->nilai_uts ?></td>
            <td><?=$obj->nilai_uas ?></td>
        </tr>
        
        <?php
        $no++;
    }
    ?>
    </tbody>