<?php
function tulosta_kertotaulu_for($luku) {
    for ($i = 1; $i <= 20; $i++) {
        $tulos = $i * $luku;
        echo "$i * $luku = $tulos<br>";
    }
}

// Käyttöesimerkki:
$annettu_luku = intval($_POST["luku"]); // Oletetaan, että luku tulee lomakkeen kautta
tulosta_kertotaulu_for($annettu_luku);
?>