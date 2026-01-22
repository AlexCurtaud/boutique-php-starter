<?php

$age = 70;

if ($age < 18) {
    echo 'minor';
} elseif ($age > 18 && $age <= 25) {
    echo 'Young adult';
} elseif ($age > 25 && $age <= 64) {
    echo 'Adult';
} elseif ($age > 64) {
    echo 'Senior';
}
