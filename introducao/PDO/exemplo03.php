<?php

    $conn = new PDO("mysql:hostname=localhost;dbname=php_db", "admin", "admin");

    $stmt = $conn->prepare("UPDATE users SET name= :NAME, email= :EMAIL, password= :PASSWORD WHERE id = :ID");

    $name = "Layanne";
    $email = "layanne@mail.com";
    $password = "H3332";
    $id = 3;

    $stmt->bindParam(":NAME", $name);
    $stmt->bindParam(":EMAIL", $email);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Alterado com sucesso";

?>