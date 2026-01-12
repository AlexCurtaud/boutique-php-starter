<?php
require_once "helpers.php";

$username = $_POST["user_name"] ?? "username";
$email = $_POST["email"] ?? "valid@email.com";
$password = $_POST["password"] ?? "password";
$confPassword = $_POST["conf_password"] ?? "password";
