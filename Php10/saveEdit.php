<?php

if(isset($_POST['fileName']) && isset($_POST['fileContents'])) {
    $tiedostoNimi = $_POST['fileName'];
    $tiedostonSisalto = $_POST['fileContents'];

    // Turvallisuuden vuoksi varmistetaan, että tiedostonimi on kelvollinen
    if (preg_match('/^[a-zA-Z0-9._-]+$/', $tiedostoNimi)) {
        // Turvallisuuden vuoksi varmistetaan, että sisältö ei sisällä haitallista dataa
        $tiedostonSisalto = htmlspecialchars($tiedostonSisalto);

        $fileWrite = fopen("uploads/".$tiedostoNimi, "w");
        if ($fileWrite) {
            fwrite($fileWrite, $tiedostonSisalto);
            fclose($fileWrite);
            echo "Tiedosto onnistuneesti kirjoitettu!<br/>";
        } else {
            echo "Virhe tiedoston kirjoittamisessa!<br/>";
        }
    } else {
        echo "Virheellinen tiedostonimi!<br/>";
    }
}
echo "<form action='index.php' method='post'>";
echo "<input type='submit' value='Palaa takaisin tiedostolistaan'>";
echo "</form>";
?>
