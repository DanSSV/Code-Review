<?php
session_start();
if (!isset($_SESSION['guest'])) {
    $_SESSION['guest'] = 'Guest';
    echo "Guest session value set.";
}

if (!isset($_SESSION['driver'])) {
    $_SESSION['driver'] = 'juan';
    echo "Driver session value set.";
}
?>