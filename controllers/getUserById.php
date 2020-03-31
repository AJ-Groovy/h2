<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'some');
define('DB_USER', 'root');
define('DB_PW', '');

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);


function get_user_by_id(PDO $pdo)
{   
    $postData = $_POST;
    $query = $pdo->prepare("SELECT * FROM users WHERE id=?");
    $query->bindParam(1, $postData['user_id']);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    return $user;
}

echo '<pre>' . print_r(get_user_by_id($pdo), true) . '</pre>';
