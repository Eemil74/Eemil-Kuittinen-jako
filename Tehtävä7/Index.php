<?php
// Funktio lämpötilan muuntamiseen Celsius- ja Fahrenheit-asteikkojen välillä
function muunnaLampotila($arvo, $muunnos) {
    if ($muunnos === "Celsius") {
        return ($arvo * 9/5) + 32;
    } if ($muunnos === "Fahrenheit") {
        return ($arvo - 32) * (5/9);
    } else {
        return "Virhe: Tarkista lämpötilayksikkö";
    }
}

// Pääohjelma
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkistetaan, että lämpötila on annettu
    if (isset($_POST["temperature"]) && isset($_POST["unit"])) {
        // Tarkistetaan, että lämpötila on numeerinen
        if (is_numeric($_POST["temperature"])) {
            $lämpötila = floatval($_POST["temperature"]);
            $yksikkö = $_POST["unit"];

            // Tarkistetaan, että lämpötila on kelvollisella välillä
            if ($lämpötila >= -40 && $lämpötila <= 40) {
                // Muunnetaan lämpötila
                $muunnettuLampotila = muunnaLampotila($lämpötila, $yksikkö);
                echo "Muunnettu lämpötila: " . round($muunnettuLampotila, 2) . " " . ($yksikkö === "Celsius" ? "Fahrenheit" : "Celsius");
            } else {
                echo "Virhe: Lämpötilan tulee olla välillä -40 - +40 Celsius-asteikolla.";
            }
        } else {
            echo "Virhe: Lämpötilan tulee olla numeerinen arvo.";
        }
    } else {
        echo "Virhe: Täytä kaikki kentät.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lämpötilamuunnin</title>
</head>
<body>
    <h2>Lämpötilamuunnin</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Syötä lämpötila:
        <input type="text" name="temperature"><br><br>
        Valitse lämpötilayksikkö:
        <select name="unit">
            <option value="Celsius">Celsius</option>
            <option value="Fahrenheit">Fahrenheit</option>
        </select><br><br>
        <input type="submit" name="submit" value="Muunna">
    </form>
</body>
</html>
