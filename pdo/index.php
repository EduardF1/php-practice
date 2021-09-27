<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $db->query("
        UPDATE users
        SET last_name = 'Smith'
        WHERE id = 2
    ");
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}

$users = $db->query("
    SELECT * FROM users
");
/*
 * Using an associative array
 * echo '<pre>', var_dump($users->fetch(PDO::FETCH_ASSOC)['email']->email), '<pre>';
 * OR with properties
 * echo '<pre>', var_dump($users->fetchObject()->email), '<pre>';
 */

echo '<pre>', var_dump($users->fetchAll(PDO::FETCH_ASSOC)), '<pre>';
