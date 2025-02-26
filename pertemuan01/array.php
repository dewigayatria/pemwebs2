<?php

// mendifinisikan sebuah array
$list_buah = ["pepaya", "mangga", "pisang", "jambu"];

/**
 * nilai didalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimualai dari 0
 */
echo $list_buah[2];
echo "<br>list berisi" . count($list_buah) . "buah";

// mencetak seluruh nilai didalam array
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menambahkan nilai array
$list_buah[] = "durian";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
// menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mengubah nilai array berdasarkan index
$list_buah[0] = "manggis";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Mencetak seluruh nilai array beserta index nya
echo "<ul>";
foreach ($list_buah as $index => $buah) {
    echo "<li>Buah dengan index $index adalah $buah</li>";
}
echo "</ul>";
