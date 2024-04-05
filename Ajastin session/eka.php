<!DOCTYPE html>
<html>
<head>
    <title>Aloita ajastin</title>
</head>
<body>
    <h1>Aloita ajastin</h1>
    <form action="toinen.php" method="post">
        <input type="submit" value="Aloita">
    </form>
</body>
</html>

<?php
session_start();

if(isset($_SESSION['start_time'])) {
    header("Location: neljäs.php");
    exit;
}
?>