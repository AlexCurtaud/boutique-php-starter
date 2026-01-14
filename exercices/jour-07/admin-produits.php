<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev",
    "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$productName = $_POST["product-name"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$edit_add = $_GET["edit"] ?? "add";
$delete = $_GET["delete"] ?? 0;


$affichage = $pdo->prepare("SELECT * FROM products");
$affichage->execute();

$product = $affichage->fetchAll(PDO::FETCH_ASSOC);
var_dump($delete, $product[3]["id"]);

function affichage($product)
{
    foreach ($product as $prod) {
        $i = 0;
        echo '<h3>' . $prod["name"] . '</h3>' .
            '<p>' . $prod["price"] . '</p>' .
            '<p>' . $prod["stock"] . '</p>' .
            '<a href=?edit=1>Update</a>' . '<br>' .
            '<a href=?delete=' . $prod["id"] . '>Delete</a>';
        var_dump($prod["id"]);
        $i++;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    if (!empty($productName) && !empty($price) && !empty($stock)) {
        $create = $pdo->prepare("INSERT INTO products (name, price, stock) VALUE (?, ?, ?)");
        $create->execute([$_POST["product-name"], $_POST["price"], $_POST["stock"]]);
        header("Location: admin-produits.php");
        exit;
    }
}

if($edit_add !== "add") {
    $update = $pdo->prepare("UPDATE products SET name, price, stock WHERE id=?");
    $update->execute($_GET["edit"]);
    header("Location: admin-produits.php");
    exit;
}

if ($delete !== 0) {
    $dlt = $pdo->prepare("DELETE FROM products WHERE id=?");
    $dlt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
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
        <input hidden name="action" value="<?= $edit_add ?>"></input>
        <ul>
            <li>
                <label for="name">Nom du Produit</label>
                <input type="text" id="name" name="product-name">
            </li>
            <li>
                <label for="price">Prix</label>
                <input type="numbers" id="price" name="price">
            </li>
            <li>
                <label for="stock">Stock disponible</label>
                <input type="numbers" id="stock" , name="stock">
            </li>
            <button type="submit">Add/Update</button>
        </ul>
    </form>
</body>

</html>