<?php

require_once('../middleware/connect.php');

$email = $_POST['email'];
$password = $_POST['password'];
$pseudo = $_POST['pseudo'];

$pwd = password_hash($password, PASSWORD_DEFAULT);

$db_connect->query("INSERT INTO user (id, email, password, pseudo) VALUES (NULL, '$email', '$pwd', '$pseudo')");