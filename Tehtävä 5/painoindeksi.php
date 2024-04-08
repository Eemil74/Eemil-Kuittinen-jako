<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="num1" placeholder="Syötä paino">
    <input type="text" name="num2" placeholder="Syötä pituus">
    <input type="submit" name="submit" value="Laske">
    <input type="button" value="Tyhjennä" onclick="resetFields()">
    </form>
<?php 
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
$vastaus = $num1 * 1.3 / pow(($num2/100),2.5);
$vastaus = round($vastaus,2);
echo "<p>Tulos: $vastaus</p>";}
?>
<script>
function resetFields() {
    document.getElementsByName('num1')[0].value = '';
    document.getElementsByName('num2')[0].value = '';
    document.querySelector('p').innerHTML = ''; // Tyhjentää vastauksen
}
</script>
</body>
</html>