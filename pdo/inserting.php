<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

if(!empty($_POST)){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $insert_user_query = $db->prepare("
        INSERT INTO users (email, first_name, last_name)
        VALUES (:email, :first_name, :last_name)
    ");

    $insert_user_query->execute([
        'email' => $email,
        'first_name' => $first_name,
        'last_name' => $last_name
    ]);
    // var_dump((int)$db->lastInsertId()); // retrieve the last inserted id
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PDO</title>
    </head>
    <body>
       <form action="inserting.php" method="post" autocomplete="off">
           <input type="text" name="email" placeholder="Email">
           <input type="text" name="first_name" placeholder="First name">
           <input type="text" name="last_name" placeholder="Last name">
           <input type="submit" value="Register">
       </form>
    </body>
</html>
