<?php
$name = $_GET["name"];
$age = $_GET["age"];

function greeting($name, $age)
{
    if ($name !== null && $age !== null) {
        return 'Bonjour ' . $name . ', vous avez ' . $age . ' ans!';
    }
    return 'Bonjour visiteur, vous avez 99 ans!';
}

echo greeting($name, $age);
