<?php
require 'Task.php';

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=greyfox','root','Terrada5224');
} catch (PDOException $e) {
  die('Could not connect to the database.');
}
$statement = $pdo->prepare('select * from todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


require 'index.view.php';


 ?>
