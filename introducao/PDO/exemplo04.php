<?php

    $conn = new PDO("mysql:hostname=localhost;dbname=php_db", "admin", "admin");

    $stmt = $conn->prepare("DELETE FROM users WHERE id = :ID");

    $id = 5;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Deletado com sucesso";

?>