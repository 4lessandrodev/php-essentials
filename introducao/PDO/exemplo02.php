<?php

    $conn = new PDO("mysql:hostname=localhost;dbname=php_db", "admin", "admin");

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES(:NAME, :EMAIL, :PASSWORD)");

    $name = "Lilo";
    $email = "lilo@mail.com";
    $password = "smalk32";

    $stmt->bindParam(":NAME", $name);
    $stmt->bindParam(":EMAIL", $email);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido com sucesso";

?>