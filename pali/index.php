<!DOCTYPE html>
<html>
<head>
    <title>Palindromin tarkistus</title>
</head>
<body>
    <h2>Anna merkkijono:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="inputString">
        <button type="submit">Tarkista</button>
    </form>

    <?php
    function isPalindrome($str) {
        // Poistetaan välilyönnit ja välimerkit
        $str = preg_replace('/[^A-Za-z]/', '', $str);
        // Muutetaan merkkijono pieniksi kirjaimiksi
        $str = strtolower($str);
        // Tarkistetaan, onko merkkijono palindromi
        $length = strlen($str);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($str[$i] != $str[$length - $i - 1]) {
                return false;
            }
        }
        return true;
    }

    // Tarkistetaan, onko lomakkeen kautta lähetetty merkkijono palindromi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        if (isPalindrome($input)) {
            echo "<p>Merkkijono '$input' on palindromi.</p>";
        } else {
            echo "<p>Merkkijono '$input' ei ole palindromi.</p>";
        }
    }
    ?>
</body>
</html>
