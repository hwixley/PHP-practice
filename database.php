<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo','root', '');
} catch (PDOException $e) {
    die('Could not connect to the database.');
}

require 'classes.php';

$query = $pdo->prepare('select * from todos');
$query->execute();

var_dump($query->fetchAll(PDO::FETCH_CLASS, 'Task'));