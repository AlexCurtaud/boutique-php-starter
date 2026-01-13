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
        if (stripos($vararr["name"], $str) !== false) {

            echo '<p>' . $vararr["name"] . '</p>';
        } else if (empty($str)) {
            echo '<p>' . $vararr["name"] . '</p>';
        }
    }
}

//////////////////////
function filtreNom($str, $arr)
{
    $filterByName = [];
    foreach ($arr as $vararr) {
        if (stripos($vararr["name"], $str) !== false || empty($str)) {
            array_push($filterByName, true);
        } else {
            array_push($filterByName, false);
        }
    }
    return $filterByName;
}

function filtrePrix($minprice, $maxprice, $arr)
{
    $filterbyPrice = [];
    foreach ($arr as $vararr) {
        if ($vararr["price"] >= $minprice && $vararr["price"] <= $maxprice) {
            array_push($filterbyPrice, true);
        } else {
            array_push($filterbyPrice, false);
        }
    }
    return $filterbyPrice;
}

function filtreCategory($category, $arr)
{
    $filterByCategory = [];
    foreach ($arr as $vararr) {
        if ($category === $vararr["category"] || empty($category)) {
            array_push($filterByCategory, true);
        } else {
            array_push($filterByCategory, true);
        }
    }
    return $filterByCategory;
}

function inStock($stock, $arr)
{
    $filterByStock = [];
    foreach ($arr as $vararr) {
        if ($stock > 0 || empty($stock)) {
            array_push($filterByStock, true);
        } else {
            array_push($filterByStock, false);
        }
    }
    return $filterByStock;
}
////////////////////////////
/// Fonction filtre global
function filterOn($arr, $productName, $minPrice, $maxPrice, $category, $stock)
{
    $filtreAllProducts = [];
    foreach ($arr as $vararr) {
        if (filtreNom($productName, $arr)) {
            if (filtrePrix($minPrice, $maxPrice, $arr)) {
                if (filtreCategory($category, $arr)) {
                    if (inStock($stock, $arr)) {
                        echo '<p>' . $vararr["name"] . '</p>';
                    }
                }
            }
        }
    }
}
