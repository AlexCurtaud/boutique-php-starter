<?php
require_once "helpers.php";

// $nom = htmlspecialchars($_POST("name"));
// $email = htmlspecialchars($_POST("email"));
// $message = htmlspecialchars($_POST("message"));

$nom = $_POST["user_name"];
$email = $_POST["user_email"];
$message = $_POST["user_message"];

function affichage($nom, $email, $message)
{
    if (mandatoryField($nom, $email, $message) == true && emailValid($email) == true && minimumChar($message) == true) {
        return $nom . '<br>' . $email . '<br>' . $message;
    }
}

echo affichage($nom, $email, $message);
