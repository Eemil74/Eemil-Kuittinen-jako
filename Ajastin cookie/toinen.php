<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// Asetetaan evästeen nimi ja arvo (ajastimen aloitusaika)
setcookie("timer_start_time", time(), time() + (86400 * 30), "/"); // Voit muuttaa vanhenemisajan tarpeen mukaan

// Ohjataan käyttäjä kolmannelle sivulle, jossa näytetään kulunut aika
header("Location: kolmas.php");
exit;
?>