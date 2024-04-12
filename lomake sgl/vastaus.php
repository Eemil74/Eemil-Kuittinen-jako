<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST['nimi'];
    $email = $_POST['email'];
    $viesti = $_POST['viesti'];
    $aihe = $_POST["aihe"];

    function validate_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    if (!validate_email($email)) {
        echo "Virheellinen sähköpostiosoite!<br>";
    } else {
        switch ($aihe) {
            case "opetussuunnitelma":
                echo "Aihe: Opetussuunnitelma";
                break;
            case "opetusharjoitelu":
                echo "Aihe: Opetusharjoitelu";
                break;
            case "kodin ja koulun yhteistö":
                echo "Aihe: Kodin ja koulun yhteistö";
                break;
            case "idea tai aloite":
                echo "Aihe: Idea tai aloite";
                break;
            case "kysyttävää":
                echo "Aihe: Kysyttävää";
                break;
            default:
                echo "Aihe: Muu aihe";
                break;
        }
        echo "<br />Nimi: $nimi <br />";

        echo "Sähköposti: $email <br />";

        echo "Viesti: $viesti <br />";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Eemil";

        // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
        $con = mysqli_connect($servername, $username, $password, $dbname);

        // database insert SQL code
        $sql = "INSERT INTO `valitus` (`aihe`, `nimi`, `email`, `viesti`) VALUES ('$aihe', '$nimi', '$email', '$viesti')";

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

        $sql = "SELECT * FROM valitus";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo  "Id:" .$row["id"] . " <br> Aihe: " . $row["aihe"] . " <br> Nimi: " . $row["nimi"] . " <br> Email: " . $row["email"] . " <br> Viesti: " . $row["viesti"] . "<br><br>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    }
    echo "<form action=index.php method=post>";
    echo "<input type=submit id=takas value=Takaisin>";
    echo "</form>";

}
?>