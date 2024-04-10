<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yhteystietolomake</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM `asiakas`;";
    // Funktio tarkistaa henkilötunnuksen oikeellisuuden
    function validate_henkilotunnus($henkilotunnus) {
        if (preg_match('/^[0-9]{6}[-+a](?!00)[0-9]{2}[0-9a-zA-Z]$/', $henkilotunnus)) {
            return true;
        } else {
            return false;
        }
    }

    // Funktio tarkistaa sähköpostin oikeellisuuden
    function validate_email($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    // Lomakkeen käsittely
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etunimi = $_POST['etunimi'];
        $sukunimi = $_POST['sukunimi'];
        $sukupuoli = $_POST['sukupuoli'];
        $henkilotunnus = $_POST['henkilotunnus'];
        $email = $_POST['email'];
        $katuosoite = $_POST['katuosoite'];
        $postinumero = $_POST['postinumero'];
        $postitoimipaikka = $_POST['postitoimipaikka'];

        // Tarkistetaan sukupuoli
        if (!isset($sukupuoli)) {
            echo "Valitse sukupuoli!<br>";
        }

        // Tarkistetaan henkilötunnus
        if (!validate_henkilotunnus($henkilotunnus)) {
            echo "Virheellinen henkilötunnus!<br>";
        }

        // Tarkistetaan sähköposti
        if (!validate_email($email)) {
            echo "Virheellinen sähköpostiosoite!<br>";
        }

        // Tarkistetaan postinumero
        if (!preg_match('/^[0-9]{5}$/', $postinumero)) {
            echo "Virheellinen postinumero!<br>";
        }
    }
    ?>
    <h2>Yhteystietolomake</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="etunimi">Etunimi:</label><br>
        <input type="text" id="etunimi" name="etunimi" required><br><br>
        
        <label for="sukunimi">Sukunimi:</label><br>
        <input type="text" id="sukunimi" name="sukunimi" required><br><br>
        
        <label for="sukupuoli">Sukupuoli:</label><br>
        <input type="radio" id="mies" name="sukupuoli" value="mies" required>
        <label for="mies">Mies</label>
        <input type="radio" id="nainen" name="sukupuoli" value="nainen" required>
        <label for="nainen">Nainen</label><br><br>

        <label for="henkilotunnus">Henkilötunnus:</label><br>
        <input type="text" id="henkilotunnus" name="henkilotunnus" required><br><br>
        
        <label for="email">Sähköposti:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="katuosoite">Katuosoite:</label><br>
        <input type="text" id="katuosoite" name="katuosoite" required><br><br>
        
        <label for="postinumero">Postinumero:</label><br>
        <input type="text" id="postinumero" name="postinumero" required><br><br>
        
        <label for="postitoimipaikka">Postitoimipaikka:</label><br>
        <input type="text" id="postitoimipaikka" name="postitoimipaikka" required><br><br>
        
        <input type="submit" value="Lähetä">
    </form>
</body>
</html>
