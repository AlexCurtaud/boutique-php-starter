<?php
require_once "helpers.php";
require_once "traitement_inscription.php";

var_dump($password, $confPassword, passwordMatch($password, $confPassword));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="traitement_inscription.php" method="POST">
        <ul>
            <li><label for="name">Username</label>
                <input type="text" id="name" name="user_name">
                <?php rangeChar($username) ?>
            </li>
            <li><label for="email">Email</label>
                <input type="email" id="email" name="user_email">
                <?php emailValid($email) ?>
            </li>
            <li><label for="password">Password</label>
                <input type="password" id="password" name="password">
                <?php passwordChar($password) ?>
            </li>
            <li><label for="password">Confirmation</label>
                <input type="password" id="conf_password" name="conf_password">
                <?php passwordMatch($password, $confPassword) ?>
            </li>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
        </ul>
    </form>
</body>

</html>