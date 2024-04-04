<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo Ajastin();
    ?>
    <form action="Ajastin" action="Sivu3.php" method="post">
        Ajastin <br>
        <input type="submit" value="Lopeta Ajastin">
    </form>
</body>

</html>
<?php
function Ajastin()
{
    //Haetaan tallennettua aikatiedostoa
    $time = unserialize(implode(" ", file("Ajastin.text")));
    //jos aikaa ei ole vielä säädetty
    if (trim($time) == "") {
        $time = time();
        $hfile = fopen("Ajatin.txt", "wb");
        flock($hfile, 2);
        fputs($hfile, serialize($time));
        flock($hfile, 3);
        fclose($hfile);
        return "Ajastin";
    }
}