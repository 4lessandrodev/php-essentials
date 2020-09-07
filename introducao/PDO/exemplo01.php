<?php 

$conn = new PDO("mysql:dbname=php_db;host:localhost", "admin", "admin");

$stmst = $conn->prepare("SELECT * FROM users ORDER BY created_at ASC");

$stmst->execute();

$result = $stmst->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

?>