<?php

$word = 'delivered';

switch ($word) {
    case 'standby':
        echo '<p style="color: grey">'.$word.'</p>';
        break;
    case 'validated':
        echo '<p style="color: yellow">'.$word.'</p>';
        break;
    case 'shipped':
        echo '<p style="color: blue">'.$word.'</p>';
        break;
    case 'delivered':
        echo '<p style="color: green">'.$word.'</p>';
        break;
    case 'canceled':
        echo '<p style="color: red">'.$word.'</p>';
        break;
}

$status = match ($word) {
    'standby' => '<p style="color: grey">'.$word.'</p>',
    'validated' => '<p style="color: yellow">'.$word.'</p>',
    'shipped' => '<p style="color: blue">'.$word.'</p>',
    'delivered' => '<p style="color: green">'.$word.'</p>',
    'canceled' => '<p style="color: red">'.$word.'</p>',
};
