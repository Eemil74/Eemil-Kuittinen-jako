<!DOCTYPE html>
<html>
<head>
<title>Laskin - Tulos</title>
</head>
<body>
<h1>Laskin - Tulos</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkista, että syötteet on annettu
    if (isset($_POST["luku1"]) && isset($_POST["luku2"]) && isset($_POST["laskutoimitus"])) {
        $luku1 = $_POST["luku1"];
        $luku2 = $_POST["luku2"];
        $laskutoimitus = $_POST["laskutoimitus"];

        // Tarkista, että luku2 ei ole nolla jos valittu jakolasku
        if ($laskutoimitus == "/" && $luku2 == 0) {
            echo "Virhe: Nollalla jakaminen ei ole sallittua.";
        } else {
            // Suorita valittu laskutoimitus niin monta kertaa kuin käyttäjä on valinnut ja tulosta tulos
                switch ($laskutoimitus) {
                    case "+":
                        $tulos = $luku1 + $luku2;
                        echo "$luku1 + $luku2 = $tulos <br>";
                        break;
                    case "-":
                        $tulos = $luku1 - $luku2;
                        echo "$luku1 - $luku2 = $tulos <br>";
                        break;
                    case "*":
                        $tulos = $luku1 * $luku2;
                        echo "$luku1 * $luku2 = $tulos <br>";
                        break;
                    case "/":
                        $tulos = $luku1 / $luku2;
                        echo "$luku1 / $luku2 = $tulos <br>";
                        break;
                    default:
                        echo "Virhe: Tuntematon laskutoimitus.";
                }
            }
        
    } else {
        echo "Virhe: Kaikkia tarvittavia tietoja ei ole annettu.";
    }
}
?>
</body>
</html>
