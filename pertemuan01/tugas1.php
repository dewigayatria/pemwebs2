<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Nilai Siswa</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
    <h3 class="text-center mb-5"> Daftar Nilai Siswa</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">Tugas</th>
                <th scope="col">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr>';
                echo '<td>' . $nomor . '</td>';
                echo '<td>' . $ns['nim'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>