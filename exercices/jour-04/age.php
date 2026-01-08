<?php
$age = 70;

if ($age < 18) {
    echo "minor";
}
else if ($age > 18 && $age <= 25){
    echo "Young adult";
}
else if ($age > 25 && $age <= 64){
    echo "Adult";
}
else if ($age > 64) {
    echo "Senior";
}