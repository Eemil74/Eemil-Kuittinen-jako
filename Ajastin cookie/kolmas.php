<?php
// Tarkistetaan, onko eväste asetettu ja käyttäjä on aloittanut ajastimen
if(isset($_COOKIE['timer_start_time'])) {
    // Lasketaan kulunut aika
    $start_time = $_COOKIE['timer_start_time'];
    $elapsed_time = time() - $start_time;

    // Tulostetaan kulunut aika
    echo "<h1>Elapsed Time</h1>";
    echo "<p>Elapsed time: " . gmdate("H:i:s", $elapsed_time) . "</p>";
 // Painike evästeen poistamiseen
 echo "<form action='neljäs.php' method='post'>";
 echo "<input type='submit' value='Reset Timer'>";
 echo "</form>";
} else {
    echo "<h1>Timer not started!</h1>";
}
?>