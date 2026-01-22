<?php

$someone = [
    'name' => 'Stan',
    'age' => 26,
    'city' => 'Toronto',
    'job' => 'Carpenter',
];

foreach ($someone as $key => $value) {
    echo '<strong>'.$key.'</strong>'.' : '.$value.'<br>';
}
