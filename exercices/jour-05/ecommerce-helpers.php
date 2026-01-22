<?php

$someone = [
    'name' => 'Stan',
    'age' => 26,
    'city' => 'Toronto',
    'job' => 'Carpenter',
];

function calculateIncludingTax(float $priceExcludingTax, float $vat = 20): float
{
    return $priceExcludingTax * (1 + $vat);
}

function calculateDiscount(float $price, float $percentage = 0): float
{
    return $price * (1 - $percentage);
}

function calculateTotal(array $cart): float
{
    foreach ($cart as $cart);

    return calculateIncludingTax($cart) + calculateDiscount($cart);
}

function formatPrice(float $amount): string
{
    return number_format($amount, 2);
}

function formatDate(string $date): string
{
    $formatDay = (date('j', strtotime($date)));
    $formatMonth = match (date('m', strtotime($date))) {
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre'
    };
    $formatYear = (date('Y', strtotime($date)));

    return "$formatDay $formatMonth $formatYear";
}

function displayStockStatus(int $stock): string
{
    if ($stock === 0) {
        return '<span style="color: red">Rutpure</span>';
    } elseif ($stock > 0 && $stock < 4) {
        return '<span style="color: orange">Dernières unités disponibles</span>';
    } else {
        return '<span style="color: green">En stock</span>';
    }
}

function displayBadges(array $product): string
{
    if ($product['stock'] > 0) {
        $new = $product['new'] ? '<p class="badge badgeNew">NEW!</p>' : '';
        $discounted = $product['discount'] > 0 ? '<p class="badge badgePromo">'.$product['discount'] * 100 .'% OFF</p>' : '';
        $derniers = ($product['stock'] > 0 && $product['stock'] < 5) ? '<p class="badge badgeDerniers"> Last Units' : '';

        return $new.$discounted.$derniers;
    } else {
        $rupture = $product['stock'] === 0 ? '<p class="badge badgeRupture">RUPTURE</p>' : '';

        return $rupture;
    }
}

function validateEmail(string $email): bool
{
    if (str_contains($email, '@') && str_contains($email, '.')) {
        return true;
    } else {
        return false;
    }
}

function validatePrice(mixed $price): bool
{
    return $price > 0;
}

function dump_and_die(mixed ...$vars): void
{
    echo '<pre style="background: #1e1e1e; color: #4ec9b0; padding: 20px; border-radius: 5px;">'.
        'Type:'.gettype($vars).
        '<br>Length: '.count($vars).
        '<br>Value: '.$vars.
        '<br></pre>';
    exit();
}

dump_and_die($someone);
