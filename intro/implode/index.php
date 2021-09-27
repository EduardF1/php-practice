<?php
$names = array('Alex', 'Kevin', 'Josh');
echo implode(',', $names);

// collect and process data
$name = 'Eduard';
$email = 'edfis@edfis.com';
$message = 'PHPnamite';
$telephone = 50221333;

$data = array(
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'telephone' => $telephone
);

$fields_sql = '`'.implode('`, `', array_keys($data)).'`';
$values_sql = '\''.implode('\', \'', $data).'\'';

$sql = "
    INSERT INTO `tableName` ($fields_sql)
    VALUES ($values_sql)
";

echo $sql;