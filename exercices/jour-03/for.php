<?php
// boucle qui affiche les nombres de 1 en 1 jusqu'à 10
for ($i = 1; $i < 11; $i++) {
    echo $i . ', ';
};

echo '<br>';

// boucle qui affiche les nombre de 2 en 2 jusqu'à 20
for ($a = 2; $a < 21; $a += 2) {
    echo $a . ', ';
};

echo '<br>';

// boucle qui affiche un compte à rebours de 1 en 1 de 10 à 0
for ($b = 10; $b > 0; $b--) {
    echo $b . ', ';
};

echo '<br>';

// boucle qui affiche la table de multiplication du nombre 7 de 1 à 10
for ($c = 1; $c < 11; $c++) {
    echo 7 . ' * ' . $c . ' = ' . $c * 7 . '<br>';
}
