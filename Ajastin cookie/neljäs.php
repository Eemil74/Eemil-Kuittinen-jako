<?php
// Asetetaan evästeen nimi ja arvo (ajastimen aloitusaika)
setcookie("timer_start_time", "", time() - 3600, "/");

// Ohjataan käyttäjä takaisin aloitussivulle
header("Location: Eka.php");
exit;
?>