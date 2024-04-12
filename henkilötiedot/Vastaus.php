    <?php
    // Lomakkeen käsittely
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etunimi = $_POST['etunimi'];
        $sukunimi = $_POST['sukunimi'];
        $tilaus = $_POST['Tilaus'];
        $puhelinnumero = $_POST['Puhelinnumero'];
        $osoite = $_POST['osoite'];
        $postinumero = $_POST['postinumero'];
        $postitoimipaikka = $_POST['postitoimipaikka'];

        // Tarkistetaan sukupuoli
        if (!isset($tilaus)) {
            echo "Valitse Tilaus!<br>";
        }


        // Tarkistetaan postinumero
        if (!preg_match('/^[0-9]{5}$/', $postinumero)) {
            echo "Virheellinen postinumero!<br>";
        }
    else {
        switch ($tilaus) {
            case "12kk":
                echo "Tilaus: 12kk";
                break;
            case "6kk":
                echo "Tilaus:6kk";
                break;
            default:
                echo "Tilaus: 3kk";
                break;
        }
        echo "<br />Etunimi: $etunimi <br />";

        echo "Sukunimi: $sukunimi <br />";

        echo "Osoite: $osoite <br />";

        echo "Puhelinnumero: $puhelinnumero <br />";

        echo "Postinumero: $postinumero <br />";

        echo "Postitoimipaikka: $postitoimipaikka <br />";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Eemil";

    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // database insert SQL code
    $sql = "INSERT INTO `asiakas` (`etunimi`, `sukunimi`, `Puhelin`, `osoite`, `p.numero`, `Tilaus`, `p.toimipaikka`) VALUES ( '$etunimi', '$sukunimi', '$puhelinnumero', '$osoite', '$postinumero', '$tilaus', '$postitoimipaikka')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "tallentaminen onnistui <br><br>";
    }

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM asiakas";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo  "Id:" .$row["id"] . " <br> Tilaus: " . $row["Tilaus"] . " <br> Nimi: " . $row["etunimi"] . " <br> Sukunimi: " . $row["sukunimi"] . " <br> Puhelinnumero: " . $row["Puhelin"] . " <br> Osoite: " . $row["osoite"] . " <br> Postinumero: " . $row["p.numero"]. " <br> Postitoimipaikka: " . $row["p.toimipaikka"] ."<br><br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    }
echo "<form action=henkilötiedot.php method=post>";
echo "<input type=submit id=takas value=Takaisin>";
echo "</form>";
    }
?>