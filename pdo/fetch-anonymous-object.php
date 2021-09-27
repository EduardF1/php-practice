<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

$users = $db->query("
    SELECT * FROM users
");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
        <?php while ($user = $users->fetchObject()): ?>
			<div class="user">
				<h4><?php echo $user->first_name ?></h4>
				<p><?php echo $user->email; ?></p>
			</div>
        <?php endwhile; ?>
	</body>
</html>
