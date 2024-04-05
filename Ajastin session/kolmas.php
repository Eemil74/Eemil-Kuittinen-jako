<?php
session_start();

if(isset($_SESSION['start_time'])) {
    unset($_SESSION['start_time']);
}

header("Location: eka.php");
exit;
?>