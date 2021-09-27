<?php
ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

if (!empty($_GET['user'])) {
    $user = $db->prepare("SELECT * FROM users WHERE id = :user_id");

    $user->execute([
        'user_id' => $_GET['user'],
    ]);
}