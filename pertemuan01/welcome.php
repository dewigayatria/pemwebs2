<!DOCTYPE html>
<html>
    <head>
        <title>WELCOME</title>
</head>
<body>
    <h3>selamat belajar</h3>
    <?php
    $_nama = "budi darmawan";
    $_umur = 20;
    $_berat = 60.5;
    $_prodi = "sistem informasi";
    $_kampus = "stt terpadu nurul fikri";
    echo "nama saya $_nama, umur saya $_umur tahun";
    echo "<br>";
    ?>
    <hr/>
    <?php
    echo "berat badan saya $_berat kg";
    echo "<br>";
    echo "saya kuliah di prodi $_prodi";
    ?>
    <br> saya kuliah dikampus <strong> <?= $_kampus ?></strong>
</body>
</html>