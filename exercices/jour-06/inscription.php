<?php
require_once 'helpers.php';
$username = $_POST['user_name'] ?? '';
$email = $_POST['user_email'] ?? '';
$password = $_POST['password1'] ?? '';
$confPassword = $_POST['conf_password1'] ?? '';
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
    <form action="inscription.php" method="POST">
        <ul>
            <li><label for="name">Username</label>
                <input type="text" id="name" name="user_name" value="<?= $username ?>">
                <?= isEmpty($username).rangeChar($username) ?>
            </li>
            <li><label for="email">Email</label>
                <input type="text" id="email" name="user_email" value="<?= $email ?>">
                <?= isEmpty($email).emailValid($email) ?>
            </li>
            <li><label for="password">Password</label>
                <input type="password" id="password" name="password1" value="<?= $password ?>">
                <?= isEmpty($password).passwordChar($password) ?>
            </li>
            <li><label for="password">Confirmation</label>
                <input type="password" id="conf_password" name="conf_password1" value="<?= $confPassword ?>">
                <?= isEmpty($confPassword).passwordMatch($password, $confPassword) ?>
            </li>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
        </ul>
    </form>
</body>

</html>