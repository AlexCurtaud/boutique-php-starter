<?php
$produit = [];

// Le but ici est de générer un tableau multidimensionnel contenant des produits
for ($i = 1; $i < 11; $i++) {
    $produit[$i - 1]["name"] = "Produit $i";
    $produit[$i - 1]["price"] = rand(10, 100);
    $produit[$i - 1]["stock"] = rand(0, 50);
}

// On affiche le tableau multidimentionnel généré précédemment
// Cela permet de voir s'il s'est correctement généré
var_dump($produit);

// Ici on va prendre chaque produit du tableau produit
// Pour chaque produit, nous allons créer une fichier produit avec le nom, prix, stock
foreach ($produit as $produit) {
    echo '<article>' . '<h3>' . $produit["name"] . '</h3>' .
        '<p>' . number_format($produit["price"], 2) . '€</p>' .
        '<p>' . $produit["stock"] . '</p>' .
        '</article>';
}
