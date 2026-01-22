<?php
$product = [
    'name' => 'Vans Invado OG',
    'description' => "Le modèle classique de l'hybride Bao + Lacet. La Invado OG est un combiné de fiabilité et d'efficacité. Ce modèle est fait pour les débutant jusqu'au niveau intermédiaire. Elles ont un flex assez souples qui vous mettra rapidement en confiance.",
    'price' => 249.99,
    'images' => ['https://images.snowleader.com/cdn-cgi/image/f=auto,fit=scale-down,q=85/https://images.snowleader.com/media/catalog/product/cache/1/image/0dc2d03fe217f8c83829496872af24a0/i/n/invado_og_black_white_2021-configurable-vans-vans00777.jpg', 'https://images.snowleader.com/cdn-cgi/image/f=auto,fit=scale-down,q=85/https://images.snowleader.com/media/catalog/product/cache/1/image/0dc2d03fe217f8c83829496872af24a0/i/n/invado_og_black_white_2021-configurable-vans-vans00777_2.jpg', 'https://images.snowleader.com/cdn-cgi/image/f=auto,fit=scale-down,q=85/https://images.snowleader.com/media/catalog/product/cache/1/image/0dc2d03fe217f8c83829496872af24a0/i/n/invado_og_black_white_2021-configurable-vans-vans00777_1.jpg'],
    'size' => [25, 26, 26.5, 27, 27.5, 28, 29, 29.5],
    'reviews' => [
        [
            'author' => 'Johnny',
            'rating' => 5,
            'comment' => 'Those boots are sick! A hell good of a time riding the mountains with it. Would recommend 10/10!',
        ],
        [
            'author' => 'Max',
            'rating' => 4,
            'comment' => 'Nothing much to say out of these boots, spend a good season with it, but the liner is becoming a bit loose after a few session so it is a bit too ig now. My advise would be to take a size below.',
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <img style="width: 300px; height: auto" src="<?= $product['images'][1] ?>" alt="<?= $product['name'] ?>">
    <p>Nouveau avons actuellement<?= count($product['size']) ?>tailles disponibles sur le site</p>
    <p>La première note de ce produit est de <?= $product['reviews'][1]['rating'] ?>/5</p>
</body>

</html>