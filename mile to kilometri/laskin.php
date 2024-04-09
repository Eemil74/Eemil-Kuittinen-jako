<!DOCTYPE html>
<html>
<head>
    <title>Etäisyyksien muunnin</title>
</head>
<body>
    <h2>Etäisyyksien muunnin - Tulos</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tarkistetaan, että etäisyys ja muunnos on annettu
        if (isset($_POST["etaisyys"]) && isset($_POST["muunnos"])) {
            $etaisyys = floatval($_POST["etaisyys"]);
            $muunnos = $_POST["muunnos"];

            if ($muunnos === "km-mi") {
                // Muunnetaan kilometrit maileiksi
                $muunnettuEtaisyys = $etaisyys * 0.621371;
                echo "Muunnettu etäisyys: " . $muunnettuEtaisyys . " mailia.";
            } elseif ($muunnos === "mi-km") {
                // Muunnetaan mailit kilometreiksi
                $muunnettuEtaisyys = $etaisyys * 1.60934;
                echo "Muunnettu etäisyys: " . $muunnettuEtaisyys . " kilometriä.";
            } else {
                echo "Virhe: Valitse muunnos.";
            }
        } else {
            echo "Virhe: Täytä kaikki kentät.";
        }
    }
    ?>
    <br><br>
    <a href="index.html">Takaisin</a>
</body>
</html>
