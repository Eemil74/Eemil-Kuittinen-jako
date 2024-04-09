<!DOCTYPE html>
<html>
<head>
    <title>Suurin luku</title>
</head>
<body>

<h2>Suurimman luvun laskin</h2>
<form method="post" action="">
    Anna ensimmäinen luku: <input type="text" name="luku1"><br><br>
    Anna toinen luku: <input type="text" name="luku2"><br><br>
    Anna kolmas luku: <input type="text" name="luku3"><br><br>
    <input type="submit" name="submit" value="Laske suurin luku">
</form>

<?php
if(isset($_POST['submit'])){
    // Tarkistetaan, että kaikki luvut on annettu
    if(empty($_POST['luku1']) || empty($_POST['luku2']) || empty($_POST['luku3'])){
        echo "Anna kaikki luvut!";
    } else {
        // Haetaan annetut luvut
        $luku1 = $_POST['luku1'];
        $luku2 = $_POST['luku2'];
        $luku3 = $_POST['luku3'];
        
        // Lasketaan suurin luku
        $suurin_luku = $luku1;
        if($luku2 > $suurin_luku){
            $suurin_luku = $luku2;
        }
        if($luku3 > $suurin_luku){
            $suurin_luku = $luku3;
        }
        
        // Tulostetaan suurin luku
        echo "Suurin luku on: " . $suurin_luku;
    }
}
?>

</body>
</html>
