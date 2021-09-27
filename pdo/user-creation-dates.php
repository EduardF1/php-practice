<?php

ini_set('display_errors', 'On');

class User
{

    protected $dates = [
        'created'
    ];

    public function __construct()
    {
        foreach ($this->dates as $date) {
            $property = $this->{$date};
            try {
                $this->{$date} = new DateTime($property);
            } catch (Exception $e) {
                echo "Error while trying to set the date and time.";
            }
        }
    }

    public function getRegistrationDate()
    {
        return $this->created->format('d M Y h:i:s');
    }

    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');

$users = $db->query("
    SELECT * FROM users
");

$users->setFetchMode(PDO::FETCH_CLASS, 'User');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
        <?php while ($user = $users->fetch()): ?>
			<div class="user">
				<h4><?php echo $user->getFullName(); ?></h4>
				<p>Registered on <?php echo $user->getRegistrationDate(); ?></p>
			</div>
        <?php endwhile; ?>
	</body>
</html>
