<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="button">
    <input type="text" name="num1" placeholder="Syötä ensimmäinen luku">
    <input type="text" name="num2" placeholder="Syötä toinen luku">
    <input type="submit" name="submit" value="Laske">
    <input type="reset">
    </form>
    <?php  
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
$vastaus = $num1 + $num2;
$vastaus1 = $vastaus /2 ;
echo "<p>Tulos: $vastaus</p><p> keskiarvo: $vastaus1</p>";}
?>
</form>
</body>
</html>