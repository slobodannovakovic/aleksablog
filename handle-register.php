<?php

include 'core/DB.php';

$connection = new DB;


    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ($firstname, $lastname, $username, $password)";
$connection = $pdo->prepare($sql);

$connection->exec($sql);


?>