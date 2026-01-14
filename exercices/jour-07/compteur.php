<?php

// Toujours en première ligne
session_start();

if (!isset($_SESSION["visits"])) {
    $_SESSION["visits"] = 0;
} else {
    $_SESSION["visits"]++;
}

if (isset($_GET["reset"])) {
    unset($_SESSION["visits"]);
    header("Location: compteur.php");
}

echo 'Vous avez visités le site: ' . $_SESSION["visits"] . ' fois';
echo '<br><a href="?reset=1">Reset</a>';
