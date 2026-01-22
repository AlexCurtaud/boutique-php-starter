<?php

session_start();
// Détruit la session (déconnecte).
session_destroy();
// Redirige vers la page de connexion
header('Location: login.php');
