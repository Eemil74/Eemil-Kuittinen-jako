<?php
session_start();

if(!isset($_SESSION['start_time'])) {
    header("Location: eka.php");
    exit;
}

$start_time = $_SESSION['start_time'];
$current_time = time();
$elapsed_time = $current_time - $start_time;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajastin</title>
</head>
<body>
    <h1>Ajastin</h1>
    <p>Kulunut aika: <?php echo $elapsed_time; ?> sekuntia</p>
    <form action="kolmas.php" method="post">
        <input type="submit" value="Lopeta">
    </form>
</body>
</html>
