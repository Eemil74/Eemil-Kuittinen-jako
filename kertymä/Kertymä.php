<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Anna luku: <input type="text" name="luku1"><br><br>
    <input type="submit" name="submit" value="Laske luku">
</form>
    <?php
    if(isset($_POST['submit'])){
    function laskeSummakertymä($luku){
    $summa = 0;
     $i = 1;
    while($i <= $luku){
    $summa += $i;
    $i++;
    }
    return $summa;
}

    $luku = $_POST['luku1'];
    $summa = laskeSummakertymä($luku);
    echo "Luvun $luku summakertymä on $summa.\n";
    }
    ?>
</body>
</html>