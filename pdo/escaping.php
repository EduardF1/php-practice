<?php
ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

if(!empty($_GET['user'])){
    $userId = $db->quote($_GET['user']);
    $user = $db->query("SELECT * FROM users WHERE id = {$userId}");
}

