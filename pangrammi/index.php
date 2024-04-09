<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangrammin tarkistus</title>
</head>
<body>
    <h1>Tarkista onko syöttämäsi lause pangrammi</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="input">Syötä sana tai lause:</label><br>
        <input type="text" id="input" name="input"><br>
        <button type="submit">Tarkista</button>
    </form>

    <?php
    function isPangram($input) {
        $input = mb_strtolower($input, 'UTF-8'); // Muuntaa syötteen pieniksi kirjaimiksi
        
        // Alustetaan taulukko, johon merkitään löydettyjen kirjainten esiintymät
        $letters = array_fill(0, 25, false); // a-z
        
        // Käydään syöte läpi ja merkitään löydetyt kirjaimet
        for ($i = 0; $i < mb_strlen($input, 'UTF-8'); $i++) {
            $char = $input[$i];
            if (ctype_alpha($char)) { // Tarkistaa, onko merkki kirjain
                if ($char >= 'a' && $char <= 'z') {
                    $letters[ord($char) - ord('a')] = true; // Merkitään kirjain löydetyksi (a-z)
            }
        }
    }
        
        // Tarkistetaan, ovatko kaikki kirjaimet löytyneet vähintään kerran
        foreach ($letters as $letter) {
            if (!$letter) {
                return false; // Jos jokin kirjain puuttuu, palautetaan false
            }
        }
        
        return true; // Jos kaikki kirjaimet löytyvät, palautetaan true
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        if (isPangram($input)) {
            echo "<p>Sana tai lause on pangrammi</p>";
        } else {
            echo "<p>Sana tai lause ei ole pangrammi</p>";
        }
    }
    ?>
</body>
</html>
