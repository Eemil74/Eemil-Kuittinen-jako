<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Tarkistetaan, onko submit-nappia painettu
if(isset($_POST["submit"])) {
    // Tarkistetaan tiedoston tyyppi
    if($imageFileType == "txt") {
        echo "Tiedosto on tekstimuotoinen ehkä<br/>";
    } else {
        echo "Tiedosto oli jotain muuta formaattia: " . $imageFileType . "<br/>";
        $uploadOk = 0;
    }

    // Tarkista onko saman niminen tiedosto jo olemassa
    if(file_exists($target_file)) {
        echo "Tiedosto oli jo olemassa<br/>";
        $uploadOk = 0;
    }

    // Tarkista onko tiedosto liian suuri
    if($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Tiedostosi oli liian suuri!<br/>";
        $uploadOk = 0;
    }

    if($uploadOk == 0) {
        echo "Sori, tiedostoa ei nyt tällä kertaa siirretty!<br/>";
    } else {
        // Yritetään siirtää tiedostoa
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Tiedosto " . $target_file . " on siirretty<br/>";
        } else {
            echo "Tapahtui virhe, tiedostoa ei siirretty!!<br/>";
        }
    }
}
echo "<form action='index.php' method='post'>";
echo "<input type='submit' value='Palaa takaisin tiedostolistaan'>";
echo "</form>";
?>
