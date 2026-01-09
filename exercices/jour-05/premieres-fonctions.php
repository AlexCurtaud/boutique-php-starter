<?php
function greeting()
{
    echo "Hello!";
}

function greetingName($name)
{
    echo "Hello $name !";
}

greeting();
greetingName("Bob");
greetingName("Eva");
greetingName("Ivar");
