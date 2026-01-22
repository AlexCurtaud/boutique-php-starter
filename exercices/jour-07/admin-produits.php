<?php

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=boutique;charset=utf8mb4',
        'dev',
        'dev',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo '✅ Connexion réussie !';
} catch (PDOException $e) {
    echo '❌ Erreur : '.$e->getMessage();
}

$productName = $_POST['product-name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$edit_add = ($_GET['edit'] ?? 'add');
$delete = $_GET['delete'] ?? 0;
$id = intval(htmlspecialchars($_GET['id']));

$affichage = $pdo->prepare('SELECT * FROM products');
$affichage->execute();

$product = $affichage->fetchAll(PDO::FETCH_ASSOC);

$rechercheParID = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$rechercheParID->execute(['id' => $id]);

$idToproduct = $rechercheParID->fetch(PDO::FETCH_ASSOC);

function affichage($product)
{
    foreach ($product as $prod) {
        echo '<h3>'.$prod['name'].'</h3>'.
            '<p>'.$prod['price'].'</p>'.
            '<p>'.$prod['stock'].'</p>'.
            '<a href=?edit=edit&id='.$prod['id'].'>Update</a>'.'<br>'.
            '<a href=?delete='.$prod['id'].'>Delete</a>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    if (! empty($productName) && ! empty($price) && ! empty($stock)) {
        $create = $pdo->prepare('INSERT INTO products (name, price, stock) VALUE (?, ?, ?)');
        $create->execute([$productName, $price, $stock]);
        header('Location: admin-produits.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'edit') {
    $update = $pdo->prepare('UPDATE products SET name= ?, price= ?, stock= ? WHERE id= ?');
    $update->execute([
        $productName,
        $price,
        $stock,
        $id,
    ]);
    header('Location: admin-produits.php');
}

if ($delete !== 0) {
    $dlt = $pdo->prepare('DELETE FROM products WHERE id=?');
    $dlt->execute([$delete]);
    header('Location: admin-produits.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Catalogue</title>
</head>

<body>
    <div class=product>
        <?php affichage($product) ?>
    </div>
    <form method="POST">
        <input type="hidden" name="action" value="<?= $edit_add ?>"></input>
        <ul>
            <li>
                <label for="name">Nom du Produit</label>
                <input type="text" id="name" name="product-name" value="<?= htmlspecialchars($edit_add === 'add' ? '' : $idToproduct['name']) ?>">
            </li>
            <li>
                <label for="price">Prix</label>
                <input type="numbers" id="price" name="price" value="<?= htmlspecialchars($edit_add === 'add' ? '' : $idToproduct['price']) ?>">
            </li>
            <li>
                <label for="stock">Stock disponible</label>
                <input type="numbers" id="stock" , name="stock" value="<?= htmlspecialchars($edit_add === 'add' ? '' : $idToproduct['stock']) ?>">
            </li>
            <button type="submit">Add/Update</button>
        </ul>
    </form>
</body>

</html>