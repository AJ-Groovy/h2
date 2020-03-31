<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'some');
define('DB_USER', 'root');
define('DB_PW', '');

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);

function delete_users_by_id(PDO $pdo)
{
    $postData = $_POST;
    $params =  str_repeat('?,', count($postData['user_id']) - 1) . '?';
    $query = $pdo->prepare("DELETE FROM users WHERE id IN ($params)");
    $query->execute($postData['user_id']);
}

delete_users_by_id($pdo);
