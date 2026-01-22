<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=boutique;charset=utf8mb4',
    'dev',
    'dev',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
// Stock la donnée qui est retourné de la recherche depuis le formulaire
$search = $_GET['recherche'];

// Paramétrage de la requête SQL
// Ici là requête recherche les NOM dans le tableau produit qui sont ressemblant :
// à la variable $search
$recherche = $pdo->prepare('SELECT name FROM products WHERE name LIKE ?');
$recherche->execute(['%'.$search.'%']);

// $product stock le résultat d'un fetchAll dans un tableau associatif
$product = $recherche->fetchAll(PDO::FETCH_ASSOC);

if (empty($product)) {
    echo 'Aucun produit trouvé';
} else {
    foreach ($product as $prod) {
        echo $prod['name'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recherche.php" method="GET">
        <label for="recherche">Recherche</label>
        <input type="text" id="recherche" name="recherche" value="<?= $search ?>">
        <button type="submit">Login</button>
    </form>
</body>

</html>