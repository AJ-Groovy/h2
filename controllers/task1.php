<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'some');
define('DB_USER', 'root');
define('DB_PW', '');

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);

function create_users_table(PDO $pdo)
{
    $query = file_get_contents(__DIR__ . '\\queries\\create_table.sql');
    $result = $pdo->exec($query);
}

create_users_table($pdo);

