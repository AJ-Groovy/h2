<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'some');
define('DB_USER', 'root');
define('DB_PW', '');

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);

function table_exists($pdo, $table)
{
    try {
        $result = $pdo->query("SELECT 1 FROM $table LIMIT 1");
    } catch (Exception $e) {
        return FALSE;
    }
    return $result !== FALSE;
}

$users_table_exists = table_exists($pdo, 'users');

require_once('./pages/index.php');


