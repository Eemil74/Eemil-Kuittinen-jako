<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Luetaan syötteet
    $sukupuoli = $_POST["sukupuoli"];
    $paino = $_POST["paino"];
    $olutpullojen_maara = $_POST["olutpullojen_maara"];
    $juomisaika = $_POST["juomisaika"];

    // Alkoholin määrä grammoina
    $alkoholin_maara_grammoina = $olutpullojen_maara * 0.5 * 8 * 4.5; // 0.5 litraa per pullo * 8 * 4.5 %

    // Alkoholin palaminen grammoina
    $palaminen_grammoina = $paino / 10 * $juomisaika;

    // Lasketaan jäljellä oleva alkoholin määrä
    $jalki_alkoholi = $alkoholin_maara_grammoina - $palaminen_grammoina;

    // Lasketaan promillemäärä
    if ($sukupuoli == "mies") {
        $promillet = $jalki_alkoholi / ($paino * 0.7);
    } else {
        $promillet = $jalki_alkoholi / ($paino * 0.6);
    }

    // Tulostetaan promillemäärä
    echo "<h2>Promillemääräsi on: " . round($promillet, 2) . " ‰</h2>";
}
?>
