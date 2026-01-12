<?php
// $nom = htmlspecialchars($_POST("name"));
// $email = htmlspecialchars($_POST("email"));
// $message = htmlspecialchars($_POST("message"));

$nom = $_POST["user_name"];
$email = $_POST["user_email"];
$message = $_POST["user_message"];
var_dump($nom);
var_dump($_POST);
var_dump(emailValid($email));
var_dump(mandatoryField($nom, $email, $message));
var_dump(minimumChar($message));
var_dump(strlen($message));



function mandatoryField($nom, $email, $message)
{
    if (!empty($nom) && !empty($email) && !empty($message)) {
        return true;
    }
    echo "All fields needs to be filled, please try again";
    return false;
}

function emailValid($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    echo "Please use a valid email";
    return false;
}

function minimumChar($message)
{
    if (strlen($message) > 10) {
        return true;
    }
    echo "Minimum 10 characters for a message";
    return false;
}

function affichage($nom, $email, $message)
{
    if (mandatoryField($nom, $email, $message) == true && emailValid($email) == true && minimumChar($message) == true) {
        return $nom . '<br>' . $email . '<br>' . $message;
    }
}

echo affichage($nom, $email, $message);
