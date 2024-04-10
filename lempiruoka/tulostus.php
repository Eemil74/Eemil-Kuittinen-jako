<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lempiruoka</title>
</head>
<body>
    <h2>Lempiruokasi</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lemppari = $_POST["lemppari"];
        
        switch ($lemppari) {
            case "pizza":
                echo "<p>Lempiruokasi on pizza!</p>";
                break;
            case "pasta":
                echo "<p>Lempiruokasi on pasta!</p>";
                break;
            case "sushi":
                echo "<p>Lempiruokasi on sushi!</p>";
                break;
            case "hampurilainen":
                echo "<p>Lempiruokasi on hampurilainen!</p>";
                break;
            default:
                echo "<p>Valitsemasi ruoka ei ole listalla.</p>";
        }
    }
    ?>
</body>
</html>
