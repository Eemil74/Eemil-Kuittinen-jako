<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="num1" placeholder="Syötä säde">
    <input type="submit" name="submit" value="Laske">
    <input type="reset">
    </form>
<?php 
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $vastaus = (4/3) * 3.1415927 * pow($num1, 3);
$vastaus = round($vastaus,2);
echo "<p>Tulos: $vastaus</p>";}
?>
</body>
</html>