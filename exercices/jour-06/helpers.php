<?php

function isEmpty($var)
{
    if (empty($var)) {
        return "<span>Mandatory field.</span>";
    }
}

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
        return "<span>Valid Email</span>";
    } else {
        return "<span>Please use a valid email.</span>";
    }
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
        return "<span>Valid Username</span>";
    } else {
        return "<span>Username > 3 to 20 characters - only letters/numbers.</span>";
    }
}

function passwordMatch($password, $confPassword)
{
    if ($password === $confPassword) {
        return "<span>Passwords do match</span>";
    } else if ($confPassword > 0) {
        return "<span>Passwords don't match</span>";
    }
}

function passwordChar($password)
{
    if (strlen($password) >= 8) {
        return "<span>Valid Password</span>";
    } else if ($password > 0) {
        return "<span>*Minimum 8 characters for a password</span>";
    }
}

function filtreProduit($str, $arr)
{
    foreach ($arr as $vararr) {
        if (stripos($vararr["name"], $str) !== false)
            echo '<p>' . $vararr["name"] . '</p>';
    }
}
