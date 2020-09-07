<?php

    $conn = new PDO("mysql:hostname=localhost;dbname=php_db", "admin", "admin");

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");

    $id = 6;

    $stmt->execute(array($id));

    //$conn->rollBack();
    $conn->commit();

    //echo "Rollback do delete id $id realizado com sucesso";
    echo "Commit do delete id $id realizado com sucesso";

?>