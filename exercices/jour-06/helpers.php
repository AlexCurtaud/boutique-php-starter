<?php

function mandatoryField($nom, $email, $message)
{
    if (!empty($nom) && !empty($email) && !empty($message)) {
        return true;
    }
    echo "<span>All fields needs to be filled, please try again</span>";
    //echo '<a href="http://localhost:8000/contact.php"> Try Again</a>"';
    return false;
}

function emailValid($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    echo "<span>Please use a valid email.</span>";
    //echo '<a href="http://localhost:8000/contact.php"> Try Again</a>"';
    return false;
}

function minimumChar($message)
{
    if (strlen($message) > 10) {
        return true;
    }
    echo "*Minimum 10 characters for a message";
    echo '<a href="http://localhost:8000/contact.php"> Try Again</a>"';
    return false;
}

function rangeChar($username)
{
    if (strlen($username) >= 3 && strlen($username) <= 20 && ctype_alnum($username)) {
        return true;
    }
    echo "<span>*Username needs to be between 3 and 20 characters with only letters and numbers.</span>";
    return false;
}

function passwordMatch($password, $confPassword)
{
    if (preg_match($password, $confPassword)) {
        return true;
    }
    echo "<span>*Passwords don't match</span>";
    return false;
}

function passwordChar($password)
{
    if (strlen($password) >= 8) {
        return true;
    }
    echo "<span>*Minimum 8 characters for a password</span>";
}
