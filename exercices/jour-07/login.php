<?php
session_start();

if (($_POST["username"] === "admin" && $_POST["password"] === "1234")) {
    $_SESSION["user"] = "admin";
    header("Location: dashboard.php");
} else if (empty($_POST["username"]) && empty($_POST["password"])) {
} else {
    echo "Identifiants incorrectes";
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
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html>