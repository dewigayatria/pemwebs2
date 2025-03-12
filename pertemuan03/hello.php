<?php
function salam($nama = "nurul fikri"){
    echo "assalamualaikum teman teman " . $nama;
}
?>
<h1>selamat datang di sttnf</h1>
<p>
    <?php
     salam("dewi");
     echo "<br>";
     salam(); 
?></p>