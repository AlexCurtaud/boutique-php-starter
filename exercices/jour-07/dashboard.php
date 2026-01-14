<?php
session_start();

if (isset($_SESSION["user"])) {
    echo 'Hello ' . $_SESSION["user"] . '!';
} else {
    header("Location: login.php");
    exit;
}

echo '<a href="logout.php">Logout</a>';
