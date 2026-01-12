<?php


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
    <form action="traitement.php" method="POST">
        <ul>
            <li><label for="name">Nom/Prénom</label>
                <input type="text" id="name" name="user_name">
            </li>
            <li><label for="email">Email</label>
                <input type="email" id="email" name="user_email">
            </li>
            <li><label for="message">Votre message</label>
                <textarea name="user_message" id="message" placeholder="Racontez-nous"></textarea>
            </li>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
        </ul>
    </form>
</body>

</html>