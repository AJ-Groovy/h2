<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'some');
define('DB_USER', 'root');
define('DB_PW', '');

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);


function create_user(PDO $pdo)
{   
    $postData = $_POST;

    $query = "INSERT INTO users (name, surname, age, email, phone) VALUES (:first_name, :last_name, :age, :email, :phone)";
    $query = $pdo->prepare($query);
    $query->execute($postData);
}

create_user($pdo);

