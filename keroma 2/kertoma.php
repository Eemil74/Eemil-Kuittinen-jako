<?php
function tulosta_kertotaulu_while($luku) {
    $i = 1;
    while ($i <= 20) {
        $tulos = $i * $luku;
        echo "$i * $luku = $tulos<br>";
        $i++;
    }
}

// Käyttöesimerkki:
$annettu_luku = intval($_POST["luku"]); // Oletetaan, että luku tulee lomakkeen kautta
tulosta_kertotaulu_while($annettu_luku);
?>
