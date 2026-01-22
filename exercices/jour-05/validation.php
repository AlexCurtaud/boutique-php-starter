<?php

// Les variables a utiliser
$stock = 4;
$discount = 0.1;
// strtotime() permet de traduire une date en seconde. Le compteur commence en 1970, donc les nombres sont très grands
$dateAdded = strtotime('2025-12-11');
$dateToday = strtotime(date('Y-m-d'));
// Ici je soustrais la date de l'ajout a la date du jour.
// Je divise cela part 60 * 60 * 24 ce qui me donne le nombre de seconde en une journée
// On obtient donc le nombre de jour de différences entre les deux dates
$dateSinced = ($dateToday - $dateAdded) / (60 * 60 * 24);
$quantity = 3;

// Comparaison avec l'opérateur ternaire
$isInStock = $stock > 0 ? 'true' : 'false';
$isOnSale = $discount > 0 ? 'true' : 'false';
$isNew = $dateSinced < 30 ? 'true' : 'false';
$canOrder = ($stock > $quantity) ? 'true' : 'false';

// Fonction fléchées avec l'opérateur ternaire
$isStock = fn ($stock) => $stock > 0 ? 'en stock' : 'pas dispo';
$isSale = fn ($discount) => $discount > 0 ? 'en promo' : 'pas de promo';
echo $isSale($discount);
$new = fn ($dateSinced) => $dateSinced < 30 ? 'nouveau produit' : 'ancienne collection';
$order = fn ($stock, $quantity) => $stock > $quantity ? 'Vous pouvez commander' : 'Pas assez de stock disponible';
// Fonctions classiques
function isInStock($stock)
{
    if ($stock > 0) {
        return '<br>true';
    }

    return '<br>false';
}

function isOnSale($discount)
{
    if ($discount > 0) {
        return '<br>true';
    }

    return '<br>false';
}

function isNew($dateSinced)
{
    if ($dateSinced < 30) {
        return '<br>true';
    }

    return '<br>false';
}

function canOrder($stock, $quantity)
{
    if ($stock > $quantity) {
        return '<br>true';
    }

    return '<br>false';
}

// echo des variables où on a utilisé l'opérateur ternaire. Beaucoup moins de lignes pour une simple expression qu'avec une fonction classique
echo '<br>'.$isInStock;
echo '<br>'.$isOnSale;
echo '<br>'.$isNew;
echo '<br>'.$canOrder;

// Appel des fonctions fléchées utilisant l'opérateur ternaire
// Ils ne fonctionnent pas et je ne sais pas pourquoi
echo $isStock($stock);
echo $isSale($discount);
echo $new($dateSinced);
echo $order($stock, $quantity);

// Appel des fonctions classique avec un echo car dans les fonctions que j'ai faites, il y a uniquement un return
echo isInStock($stock);
echo isOnSale($discount);
echo isNew($dateSinced);
echo canOrder($stock, $quantity);
