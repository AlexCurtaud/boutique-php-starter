<?php
$nom = 'Transporter T6.1';
$description = "Le tout dernier Transporter est l'utilitaire ultime de la gamme. D'origine il offre 3 places à l'avant du véhicule et propose le plus grand volume de stockage parmis la concurrence. Vous cherchez la fiabilité, l'efficacité ainsi que la sobriété? N'hésitez plus!";
$prixHT = 38333.325;
$tauxTVA = 0.2;
$Stock = 23;
$prixTTC = $prixHT * (1 + $tauxTVA);
$format = 'à partir de %01.2f €';
$discount = 0.07;
$prixDiscount = $prixTTC * (1 - $discount);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nom ?></Tr>
    </title>
</head>

<body style="margin-left: 20px">
    <h1 style="color: grey; width: 300px"><?= $nom ?></h1>
    <p style="width: 300px; text-align: justify; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><?= $description ?>
        <br><br><span style="font-style: italic; font-size: 14px;">à partir de <strike><?= number_format($prixTTC, 2, ',', ' ') ?> €</strike></span> -7%
        <br><span style="font-style: italic; font-size: 14px; padding-left: 85px; font-weight:600"><?= number_format($prixDiscount, 2, ',', ' ') ?> €</span>
    </p>

</body>

</html>