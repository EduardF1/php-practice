<?php
ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

$users = $db->query("SELECT count(id) AS count FROM users");

echo $users->fetchObject()->count;