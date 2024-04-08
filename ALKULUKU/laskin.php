<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkistetaan, että luku on annettu
    if (isset($_POST["luku"])) {
        $luku = intval($_POST["luku"]);

        // Tarkistetaan, että luku on positiivinen
        if ($luku > 1) {
            $onAlkuluku = true;
            for ($i = 2; $i <= sqrt($luku); $i++) {
                if ($luku % $i == 0) {
                    $onAlkuluku = false;
                    break;
                }
            }
            if ($onAlkuluku) {
                echo "Luku " . $luku . " on alkuluku.";
            } else {
                echo "Luku " . $luku . " ei ole alkuluku.";
            }
        } else {
            //jos luku on virheellinen
            echo "Virhe: Syötetyn luvun tulee olla positiivinen kokonaisluku suurempi kuin yksi.";
        }
    } else {
        //jos lukua ei ole
        echo "Virhe: Syötä luku ensin lomakkeeseen.";
    }
}
?>
